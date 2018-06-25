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
        $cla = $request->input('cla');
        $abc = $request->input('abc');
        $search = $request->input('search', '');
        
        if ($search) {
            $like = '%'.$search.'%';
            // 模糊搜索商品标题、商品详情、SKU 标题、SKU描述
            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like);
                    });
            });
        }

        if($cla) {
            $like = '%'.$cla.'%';

            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like);
                    });
            });
        }

        if($abc) {
            $like = '%'.$abc.'%';

            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like);
                    });
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
                'cla' => $cla,
                'abc' => $abc
            ],
        ]);
    }

    public function show(Product $product, Request $request)
    {
        $count = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('stock');
        $price = DB::table('product_skus')->where('id', $product->skus[0]->id)->value('price');
        $sc = DB::table('products')->where('id', $product->id)->value('sold_count');
        $rc = DB::table('products')->where('id', $product->id)->value('review_count');
        $rt = DB::table('products')->where('id', $product->id)->value('rating');

        if( $sku = $request->input('sku') ) {
        $proid = DB::table('product_skus')->where('id', $sku)->value('product_id');
        $count = DB::table('product_skus')->where('id', $sku)->value('stock');
        $price = DB::table('product_skus')->where('id', $sku)->value('price');
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
            'product' => $product,
            'co' => $count,
            'pri' => $price,
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

        return view('products.favorites', ['products' => $products]);
    }

}
