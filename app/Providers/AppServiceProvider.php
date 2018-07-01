<?php

namespace App\Providers;

use Monolog\Logger;
use Yansongda\Pay\Pay;
use Illuminate\Support\ServiceProvider;

// 新增部分： 
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Config;
use App\Models\Tag;
use File;
use Cache;
use DB;
use App\Observers\CacheClearObserver;
use Illuminate\Database\QueryException;
use Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //该函数内均为新增部分
        ini_set('memory_limit', "256M");
        //分配blogs前台通用的数据
        view()->composer('blogs/*', function($view){
            $category = Cache::remember('common:category', 10080, function () {
                // 获取分类导航
                return Category::select('id', 'name')->orderBy('sort')->get();
            });

            $tag = Cache::remember('common:tag', 10080, function () {
                // 获取标签下的文章数统计
                return Tag::has('articles')->withCount('articles')->get();
            });

            $topArticle = Cache::remember('common:topArticle', 10080, function () {
                // 获取置顶推荐文章
                return Article::select('id', 'title')
                    ->where('is_top', 1)
                    ->orderBy('created_at', 'desc')
                    ->get();
            });

            $newComment = Cache::remember('common:newComment', 10080, function () {
                // 获取最新评论
                $commentModel = new Comment();
                return $commentModel->getNewData();
            });

            // $friendshipLink = Cache::remember('common:friendshipLink', 10080, function () {
            //     // 获取友情链接
            //     return FriendshipLink::select('name', 'url')
            //         ->orderBy('sort')
            //         ->get();
            // });

            // $gitProject = Cache::remember('common:gitProject', 10080, function () {
            //     // 获取开源项目
            //     return GitProject::select('name', 'type')->orderBy('sort')->get();
            // });

            // 分配数据
            $assign = compact('category', 'tag', 'topArticle', 'newComment', 'friendshipLink', 'gitProject');
            $view->with($assign);
        });

        // 使用 try catch 是为了解决 composer install 时候触发 php artisan optimize 但此时无数据库的问题
        try {
            // 获取配置项
            $config = Cache::remember('config', 10080, function () {
                return Config::pluck('value','name');
            });
            // 解决初次安装时候没有数据引起报错
            if ($config->isEmpty()) {
                Artisan::call('cache:clear');
            } else {
                // 用 config 表中的配置项替换 /config/ 目录下文件中的配置项
                $serviceConfig = [
                    'services.github.client_id' => $config['GITHUB_CLIENT_ID'],
                    'services.github.client_secret' => $config['GITHUB_CLIENT_SECRET'],

                    'services.qq.client_id' => $config['QQ_APP_ID'],
                    'services.qq.client_secret' => $config['QQ_APP_KEY'],

                    'services.weibo.client_id' => $config['SINA_API_KEY'],
                    'services.weibo.client_secret' => $config['SINA_SECRET'],
                ];
                config($serviceConfig);
            }
        } catch (QueryException $e) {
            // 此处清除缓存是为了解决上面无数据库时缓存时 config 缓存了空数据 db:seed 后 config 走了缓存为空的问题
            Artisan::call('cache:clear');
            $config = [];
        }
        // 分配全站通用的数据
        view()->composer('*', function ($view) use($config) {
            $assign = [
                'config' => $config
            ];
            // 获取赞赏捐款文章
            if (!empty($config['QQ_QUN_ARTICLE_ID'])) {
                $qqQunArticle = Cache::remember('qqQunArticle', 10080, function () use($config) {
                    return Article::select('id', 'title')->where('id', $config['QQ_QUN_ARTICLE_ID'])->first();
                });
                $assign['qqQunArticle'] = $qqQunArticle;
            }
            $view->with($assign);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 往服务容器中注入一个名为 alipay 的单例对象
        $this->app->singleton('alipay', function () {
            $config = config('pay.alipay');
            $config['notify_url'] = route('payment.alipay.notify');
            $config['return_url'] = route('payment.alipay.return');
            // 判断当前项目运行环境是否为线上环境
            if (app()->environment() !== 'production') {
                $config['mode']         = 'dev';
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
            return Pay::alipay($config);
        });

        $this->app->singleton('wechat_pay', function () {
            $config = config('pay.wechat');
            $config['notify_url'] = route('payment.wechat.notify');
            if (app()->environment() !== 'production') {
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个微信支付对象
            return Pay::wechat($config);
        });
    }

    // 如下为新增部分：


}
