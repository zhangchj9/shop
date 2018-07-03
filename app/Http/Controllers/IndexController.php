<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use App\Http\Requests\Comment\Store;
use App\Models\OauthUser;
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Comment;
use App\Models\Config;
use App\Models\User;
use App\Models\Tag;
use App\Models\Product;
use DB;
use Cache;

class IndexController extends Controller
{
    public function index(Request $request){
        $id = "000";        
        $builder = Product::query()->where('on_sale', true);
            $foryou = $builder
                    -> orderBy(\DB::raw('RAND()'))
                    -> take(5)
                    -> get();
        if($request->user()) {
            $id = $request->user()->id;
            $person = DB::table('personalizations')->where('user_id', $id)->value('id');            
        }        
        $id = "000";  
        if($request->user() && $person) {      //个性化推荐算法
        $id = $request->user()->id;
        $brand = DB::table('personalizations')->where('user_id', $id)->value('brand');
        $brand = '%'.$brand.'%';
        $photo = DB::table('personalizations')->where('user_id', $id)->value('photo');
        $memosize = DB::table('personalizations')->where('user_id', $id)->value('memorysize');
        $screensize = DB::table('personalizations')->where('user_id', $id)->value('screensize');
        $ram = DB::table('personalizations')->where('user_id', $id)->value('ram');
        $builder = Product::query()->where('on_sale', true);
        $first = $builder->WhereHas('skus', function ($query) use ($brand) {
                        $query->Where('param', 'like', $brand);
                    });
        $builder = Product::query()->where('on_sale', true);
        $second = $builder->WhereHas('skus', function ($query) use ($brand) {
                        $query->Where('param', 'not like', $brand);
                    });
        
        if($screensize=='0') {}
        if($screensize=='1') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv1%')
                        ->orWhere('param', 'like', '%z_lv2%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv1%')
                        ->orWhere('param', 'like', '%z_lv2%');
                    });
        }
        if($screensize=='2') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv3%')
                        ->orWhere('param', 'like', '%z_lv4%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv3%')
                        ->orWhere('param', 'like', '%z_lv4%');
                    });
        }
        if($screensize=='3') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv5%')
                        ->orWhere('param', 'like', '%z_lv6%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv5%')
                        ->orWhere('param', 'like', '%z_lv6%');
                    });
        }
        if($photo=='0') {}
        if($photo=='1') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv3%')
                        ->orWhere('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv3%')
                        ->orWhere('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
        }
        if($photo=='2') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
        }
        if($memosize=='0') {}
        if($memosize=='1') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：128GB%')
                        ->orWhere('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：128GB%')
                        ->orWhere('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
        }
        if($memosize=='2') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
        }
        if($ram=='0') {}
        if($ram=='1') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%内存：4GB%')
                        ->orWhere('param', 'like', '%内存：6GB%')
                        ->orWhere('param', 'like', '%内存：8GB%')
                        ->orWhere('param', 'like', '%m_up%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%内存：4GB%')
                        ->orWhere('param', 'like', '%内存：6GB%')
                        ->orWhere('param', 'like', '%内存：8GB%')
                        ->orWhere('param', 'like', '%m_up%');
                    });
        }
        if($ram=='2') {
            $first = $first->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%内存：6GB%')
                        ->orWhere('param', 'like', '%内存：8GB%')
                        ->orWhere('param', 'like', '%m_up%');
                    });
            $second = $second->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%内存：6GB%')
                        ->orWhere('param', 'like', '%内存：8GB%')
                        ->orWhere('param', 'like', '%m_up%');
                    });
        }
        $foryou = $first->union($second);
        $foryou = $foryou->get();
        }
        $builder = Product::query()->where('on_sale', true);
        $rans = $builder
                    -> orderBy(\DB::raw('RAND()'))
                    -> take(5)
                    -> get();
        $builder = Product::query()->where('on_sale', true);
        $top5 = $builder
                    -> orderBy('sold_count','desc')
                    -> take(5)
                    -> get();
        return view('index', [
            'idd' => $id,
            'foryou' => $foryou,
            'rans' => $rans,
            'top5' => $top5
        ]);
    }

    /**
     * 首页
     *
     * @param Article $articleModel
     * @return mixed
     */

     
    // 这里需要改个名字，然后在Web.php里换一下 
    public function blogIndex(Article $articleModel)
	{
	    // 获取文章列表数据
        $article = Article::select('id', 'category_id', 'title', 'admin_id', 'description', 'cover', 'created_at')
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);
        $config = cache('config'); // 这个config是一个全局缓存
        $head = [
            'title' => $config->get('WEB_TITLE'),
            'keywords' => $config->get('WEB_KEYWORDS'),
            'description' => $config->get('WEB_DESCRIPTION'),
        ];
        $assign = [
            'category_id' => 'index',
            'article' => $article,
            'head' => $head,
            'tagName' => ''
        ];
		return view('blogs.index', $assign);
    }
    

    public function search_test(Request $request){
        $wd = clean($request->input('wd')); // 这里返回的东西带有html标签

        $wd = strip_tags($wd);
        $id = Article::search($wd)->keys();

        // dd($id);
        // 获取文章列表数据
        $article = Article::select('id', 'category_id', 'title', 'admin_id', 'description', 'cover', 'created_at')
            ->whereIn('id', $id)
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);
        $head = [
            'title' => $wd,
            'keywords' => '',
            'description' => '',
        ];
        $assign = [
            'id' => $id,
            'wd' => $wd,
            'category_id' => 'index',
            'article' => $article,
            'tagName' => '',
            'title' => $wd,
            'head' => $head
        ];
        return view('blogs.show', $assign);
    }


    /**
     * 文章详情
     *
     * @param         $id
     * @param Article $articleModel
     * @param Comment $commentModel
     *
     * @return $this
     */
    public function article($id, Request $request, Article $articleModel, Comment $commentModel)
    {
        // 获取文章数据
        $data = Article::with(['category', 'tags'])->find($id);
        if (is_null($data)) {
            return abort(404);
        }
        // 同一个用户访问同一篇文章每天只增加1个访问量  使用 ip+id 作为 key 判别
        $ipAndId = 'articleRequestList'.$request->ip().':'.$id;
        if (!Cache::has($ipAndId)) {
            cache([$ipAndId => ''], 1440);
            // 文章点击量+1
            $data->increment('click');
        }

        // 获取上一篇
        $prev = $articleModel
            ->select('id', 'title')
            ->orderBy('created_at', 'asc')
            ->where('id', '>', $id)
            ->limit(1)
            ->first();

        // 获取下一篇
        $next = $articleModel
            ->select('id', 'title')
            ->orderBy('created_at', 'desc')
            ->where('id', '<', $id)
            ->limit(1)
            ->first();

        // 获取评论
        $comment = $commentModel->getDataByArticleId($id);
        $category_id = $data->category->id;
        $assign = compact('category_id', 'data', 'prev', 'next', 'comment');
        return view('blogs.article', $assign);
    }

    /**
     * 获取栏目下的文章
     *
     * @param Article $articleModel
     * @param $id
     * @return mixed
     */
    public function category(Article $articleModel, $id)
    {
        // 获取分类数据
        $category = Category::select('id', 'name', 'keywords', 'description')
            ->where('id', $id)
            ->first();
        if (is_null($category)) {
            return abort(404);
        }
        // 获取分类下的文章
        $article = $category->articles()
            ->orderBy('created_at', 'desc')
            ->with('tags')
            ->paginate(10);
        // 为了和首页共用 html ； 此处手动组合分类数据
        if ($article->isNotEmpty()) {
            $article->setCollection(
                collect(
                    $article->items()
                )->map(function ($v) use ($category) {
                    $v->category = $category;
                    return $v;
                })
            );
        }

        $head = [
            'title' => $category->name,
            'keywords' => $category->keywords,
            'description' => $category->description,
        ];
        $assign = [
            'category_id' => $id,
            'article' => $article,
            'tagName' => '',
            'title' => $category->name,
            'head' => $head
        ];
        return view('blogs.index', $assign);
    }

    /**
     * 获取标签下的文章
     *
     * @param $id
     * @param Article $articleModel
     * @return mixed
     */
    public function tag($id, Article $articleModel)
    {
        // 获取标签
        $tag = Tag::select('id', 'name')->where('id', $id)->first();
        if (is_null($tag)) {
            return abort(404);
        }
        // TODO 不取 markdown 和 html 字段
        // 获取标签下的文章
        $article = $tag->articles()
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);
        $head = [
            'title' => $tag->name,
            'keywords' => '',
            'description' => '',
        ];
        $assign = [
            'category_id' => 'index',
            'article' => $article,
            'tagName' => $tag->name,
            'title' => $tag->name,
            'head' => $head
        ];
        return view('blogs.index', $assign);
    }


    /**
     * 文章评论
     *
     * @param Comment $commentModel
     */
    public function comment(Request $request ,Store $store, Comment $commentModel, OauthUser $oauthUserModel)
    {
        $data = $store->only('content', 'article_id', 'pid');
        // // 获取用户id
        // $userId = session('user.id');
        // 如果用户输入邮箱；则将邮箱记录入oauth_user表中
        // $email = $request->input('email');
        // if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        //     // 修改邮箱
        //     $oauthUserMap = [
        //         'id' => $userId
        //     ];
        //     $oauthUserData = [
        //         'email' => $email
        //     ];
        //     $oauthUserModel->updateData($oauthUserMap, $oauthUserData);
        //     session(['user.email' => $email]);
        // }
        // 存储评论
        $id = $commentModel->storeData_mine($request,$data); // 调用Comment.php的storeData_mine()函数
        // 更新缓存
        Cache::forget('common:newComment');
        return ajax_return(200, ['id' => $id]);
    }

    /**
     * 检测是否登录
     */
    public function checkLogin(Request $request)
    {
        if (is_null($request->user()->id)) {
            return 0;
        } else {
            return 1;
        }
    }

    /**
     * 搜索文章
     *
     * @param Request $request
     * @param Article $articleModel
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request){
        $wd = clean($request->input('wd'));
        $wd = strip_tags($wd); // 去除通过检索框传进来的html标签
        $id = Article::search($wd)->keys();

        // dd($id);
        // 获取文章列表数据
        $article = Article::select('id', 'category_id', 'title', 'admin_id', 'description', 'cover', 'created_at')
            ->whereIn('id', $id)
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);
        $head = [
            'title' => $wd,
            'keywords' => '',
            'description' => '',
        ];
        $assign = [
            'category_id' => 'index',
            'article' => $article,
            'tagName' => '',
            'title' => $wd,
            'head' => $head
        ];
        return view('blogs.index', $assign);
    }


}
