<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OrderItem;
use DB;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // 创建一个查询构造器
        // $coun = Product::query()->count();
        $builder = Product::query()->where('on_sale', true);
        // 判断是否有提交 search 参数，如果有就赋值给 $search 变量
        // search 参数用来模糊搜索商品
        $brand = $request->input('brand');
        $memo = $request->input('memo');
        $disk = $request->input('disk');
        $floor = $request->input('floor');
        $highest = $request->input('highest');
        $cpu = $request->input('cpu');
        $pixel = $request->input('pixel');
        $siz = $request->input('siz');
        $sys = $request->input('sys');
        $bpix = $request->input('bpix');
        $fpix = $request->input('fpix');
        $search = $request->input('search', '');
        
        if ($search) {
            $like = '%'.$search.'%';
            // 模糊搜索商品标题、商品详情、SKU 标题、SKU描述
            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like)
                            ->orWhere('param', 'like', $like);
                    });
            });
        }

        if($memo) {
            $like = '%'.$memo.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }
        

        if($disk) {
            $like = '%'.$disk.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        if($brand) {
            $like = '%'.$brand.'%';

            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like)
                            ->orWhere('param', 'like', $like);
                    });
            });
        }

        if($floor && !$highest) {            

            $builder->where(function ($query) use ($floor) {
                $query->WhereHas('skus', function ($query) use ($floor) {
                        $query->where('price', '>', $floor);
                    });
            });
            }

        if($highest && !$floor) {            

            $builder->where(function ($query) use ($highest) {
                $query->WhereHas('skus', function ($query) use ($highest) {
                        $query->where('price', '<', $highest);
                    });
            });
            }

        if($highest && $floor) {            

            $builder->where(function ($query) use ($highest,$floor) {
                $query->WhereHas('skus', function ($query) use ($highest,$floor) {
                        $query->whereBetween('price', [$floor, $highest]);
                    });
            });
            }

        if($cpu) {
            $like = '%'.$cpu.'%';

            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like)
                            ->orWhere('param', 'like', $like);
                    });
            });
        }

        if($pixel) {
            $like = '%'.$pixel.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        if($siz) {
            $like = '%'.$siz.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        if($sys) {
            $like = '%'.$sys.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        if($bpix) {
            $like = '%'.$bpix.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        if($fpix) {
            $like = '%'.$fpix.'%';

            $builder->WhereHas('skus', function ($query) use ($like) {
                        $query->Where('param', 'like', $like);
                    });
            }

        // 是否有提交 order 参数，如果有就赋值给 $order 变量
        // order 参数用来控制商品的排序规则
        if ($order = $request->input('order', '')) {
            // 是否是以 _asc 或者 _desc 结尾
            if (preg_match('/^(.+)_(asc|desc)$/', $order, $m)) {
                // 如果字符串的开头是这 3 个字符串之一，说明是一个合法的排序值
                if (in_array($m[1], ['price', 'sold_count', 'rating'])) {
                    // 根据传入的排序值来构造排序参数
                    $builder->orderBy($m[1], $m[2]);
                }
            }
        }

        $count = $builder->count();

        $products = $builder->paginate(15);

        return view('products.index', [
            'counts' => $count,
            'products' => $products,
            'filters'  => [
                'search' => $search,
                'order'  => $order,
                'brand' => $brand,
                'memo' => $memo,
                'disk' => $disk,
                'floor' => $floor,
                'highest' => $highest,
                'cpu' => $cpu,
                'pixel' => $pixel,
                'siz' => $siz,
                'sys' => $sys,
                'bpix' => $bpix,
                'fpix' => $fpix
            ],
        ]);
    }

    public function show(Product $product, Request $request)
    {
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
        $foryou = $first->unionall($second);
        if($screensize==0) {}
        else if($screensize==1) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv1%')
                        ->orWhere('param', 'like', '%z_lv2%');
                    });
        }
        else if($screensize==2) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv3%')
                        ->orWhere('param', 'like', '%z_lv4%');
                    });
        }
        else if($screensize==3) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%z_lv5%')
                        ->orWhere('param', 'like', '%z_lv6%');
                    });
        }
        if($photo==0) {}
        else if($photo==1) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv3%')
                        ->orWhere('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
        }
        else if($photo==2) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%b_lv4%')
                        ->orWhere('param', 'like', '%b_lv5%');
                    });
        }
        if($memosize==0) {}
        else if($memosize==1) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：32GB%')
                        ->orWhere('param', 'like', '%机身存储：64GB%')
                        ->orWhere('param', 'like', '%机身存储：128GB%')
                        ->orWhere('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
        }
        else if($memosize==2) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%机身存储：128GB%')                        
                        ->orWhere('param', 'like', '%机身存储：256GB%')
                        ->orWhere('param', 'like', '%机身存储：512GB%')
                        ->orWhere('param', 'like', '%d_up%');
                    });
        }
        if($ram==0) {}
        else if($ram==1) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'not like', '%m_down%');
                    });
        }
        else if($ram==2) {
            $foryou = $foryou->WhereHas('skus', function ($query) {
                        $query->Where('param', 'like', '%内存：4GB%')
                        ->orWhere('param', 'like', '%内存：6GB%')
                        ->orWhere('param', 'like', '%内存：8GB%')
                        ->orWhere('param', 'like', '%m_up%');
                    });
        }
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

        $count = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('stock');
        $price = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('price');
        $des = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('description');
        $param = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('param');
        $param = explode('；', $param);

        $sc = DB::table('products')->where('id', $product->id)->value('sold_count');
        $rc = DB::table('products')->where('id', $product->id)->value('review_count');
        $rt = DB::table('products')->where('id', $product->id)->value('rating');        

        if( $sku = $request->input('sku') ) {
        $count = DB::table('product_skus')->where('id', $sku)->value('stock');
        $price = DB::table('product_skus')->where('id', $sku)->value('price');
        $des = DB::table('product_skus')->where('id', $sku)->value('description');
        $param = DB::table('product_skus')->where('id', $sku)->value('param');
        $param = explode('；', $param);
        }

        if (!$product->on_sale) {
            throw new InvalidRequestException('商品未上架');
        }

        $favored = false;
        // 用户未登录时返回的是 null，已登录时返回的是对应的用户对象
        if($user = $request->user()) {
            // 从当前用户已收藏的商品中搜索 id 为当前商品 id 的商品
            // boolval() 函数用于把值转为布尔值
            $favored = boolval($user->favoriteProducts()->find($product->id));
        }
        
        $reviews = OrderItem::query()
            ->with(['order.user', 'productSku']) // 预先加载关联关系
            ->where('product_id', $product->id)
            ->whereNotNull('reviewed_at') // 筛选出已评价的
            ->orderBy('reviewed_at', 'desc') // 按评价时间倒序
            ->limit(10) // 取出 10 条
            ->get();
        
        // 最后别忘了注入到模板中
        return view('products.show', [
            'idd' => $id,
            'foryou' => $foryou,
            'rans' => $rans,
            'top5' => $top5,
            'product' => $product,
            'param' => $param,
            'co' => $count,
            'pri' => $price,
            'des' => $des,
            'favored' => $favored,
            'reviews' => $reviews,
            'sc' => $sc,
            'rc' => $rc,
            'rt' => $rt,
            'filters'  => [                
                'sku' => $sku
            ]
        ]);
    }

    public function favor(Product $product, Request $request)
    {
        $user = $request->user();
        if ($user->favoriteProducts()->find($product->id)) {
            return [];
        }

        $user->favoriteProducts()->attach($product);

        return [];
    }

    public function disfavor(Product $product, Request $request)
    {
        $user = $request->user();
        $user->favoriteProducts()->detach($product);

        return [];
    }

    public function favorites(Request $request)
    {
        $products = $request->user()->favoriteProducts()->paginate(15);

        

        $price = null;
        $count = null;

        if( $sku = $request->input('sku') ) {
            $price = DB::table('product_skus')->where('id', $sku)->value('price');
            $count = DB::table('product_skus')->where('id', $sku)->value('stock');
        }

        return view('products.favorites', [
            'products' => $products,
            'pri' => $price,
            'co' => $count,
            'filters'  => [                
                'sku' => $sku
            ]
        ]);
    }

}
