<?php

// Route::get('/', function () {
//     // return view('welcome');
//     echo "test"; 
// });

// Route::redirect('/', '/products')->name('root');
Route::redirect('/', '/index');
Route::get('checkLogin', 'IndexController@checkLogin');
Route::get('/index', 'IndexController@index')->name('root');
Route::get('/products', 'ProductsController@index')->name('products.index');

Route::get('/blog', 'IndexController@blogIndex')->name('blogs.index'); //博客列表, blogIndex分配了一个$assign变量到对应的blade中去了
Route::get('blog/{id}', 'IndexController@article'); //博客详情页
Route::get('search', 'IndexController@search')->name('search');

Route::get('tag/{id}', 'IndexController@tag');
Route::get('category/{id}', 'IndexController@category');

//Route::get('auth/geetest', 'GetGeetestController@getGeetest');//验证码
Route::get('auth/geetest','Auth\AuthController@getGeetest');
// Route::post('/register','ZhanshiController@index')->name('zhanshi');
// Route::get('/register', 'ZhanshiController@index2')->name('123');


// 如下路由届用于测试：（不需要登陆，通过网站可直接进行访问）
// 对博客进行测试，查看search函数出错的原因
// Route::get('/blogTest', 'IndexController@test'); //博客列表测试
use App\Models\Article;
Route::get('getwd', function(){
    return view("blogs.test");
})->name('get_wd');
Route::get('searchTest', 'IndexController@search_test')->name('search_test'); // 查询函数测试
Route::get('/blogSearch', function () {
    // 为查看方便都转成数组
    // dump(Article::search('二')->get()->toArray());
    
    // 如下代码在获取文章的过程中并无问题
    $id = Article::search('laravel')->keys();
    $article = Article::select('id', 'category_id', 'title', 'admin_id', 'description', 'cover', 'created_at')
        ->whereIn('id', $id)
        ->orderBy('created_at', 'desc')
        ->with(['category', 'tags'])
        ->paginate(10);
    dump($article);
});

Route::get('commentTest', function(){return view('blogs.commentTest');});
// Route::get('', 'TestController@article');



Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::get('/isvip_notice','PagesController@isvipnotice')->name('isvip_notice');//提示vip路由
    // Route::get('/vipregister','PagesController@vipregisterindex')->name('vipregister');
    Route::get('/vipregister','PagesController@vipregisterindex')->name('vipregister');
    Route::group(['middleware' => 'isvip'],function(){
        Route::get('/viparea','PagesController@vipindex')->name('vip_page');
    });
    Route::get('/questionnaire','QuestionnaireController@index')->name('questionnaire.index');//跳转到问卷页�?
    Route::post('questionnaire', 'QuestionnaireController@store')->name('questionnaire.store');
    Route::group(['middleware' => 'email_verified'], function() {
        
        Route::post('comment', 'IndexController@comment'); //上传评论


        // 博客管理
        Route::group(['prefix' => 'blog'], function () {
            Route::get('index', 'BlogController@index'); // 博客列表
            Route::get('create', 'BlogController@create'); // 发布博客
            Route::post('store', 'BlogController@store');
            Route::get('edit/{id}', 'BlogController@edit'); // 编辑博客
            Route::post('update/{id}', 'BlogController@update'); 
            Route::post('uploadImage', 'BlogController@uploadImage'); // 上传图片
            Route::get('destroy/{id}', 'BlogController@destroy'); // 删除博客
            Route::get('restore/{id}', 'BlogController@restore'); // 恢复删除的博客
            Route::get('forceDelete/{id}', 'BlogController@forceDelete'); // 彻底删除博客
        });

        // 博客分类管理
        Route::group(['prefix' => 'category'], function () {
            Route::get('index', 'CategoryController@index'); // 分类列表
            Route::get('create', 'CategoryController@create'); // 添加分类
            Route::post('store', 'CategoryController@store');
            Route::get('edit/{id}', 'CategoryController@edit'); // 编辑分类
            Route::post('update/{id}', 'CategoryController@update');
            Route::post('sort', 'CategoryController@sort'); // 排序
            Route::get('destroy/{id}', 'CategoryController@destroy'); // 删除分类
            Route::get('restore/{id}', 'CategoryController@restore'); // 恢复删除的分类
            Route::get('forceDelete/{id}', 'CategoryController@forceDelete'); // 彻底删除分类
        });

        // 博客标签管理
        Route::group(['prefix' => 'tag'], function () {
            Route::get('index', 'TagController@index'); // 标签列表
            Route::get('create', 'TagController@create'); // 添加标签
            Route::post('store', 'TagController@store');
            Route::get('edit/{id}', 'TagController@edit'); // 编辑标签
            Route::post('update/{id}', 'TagController@update');
            Route::get('destroy/{id}', 'TagController@destroy'); // 删除标签
            Route::get('restore/{id}', 'TagController@restore'); // 恢复删除的标签
            Route::get('forceDelete/{id}', 'TagController@forceDelete'); // 彻底删除标签
        });

        // 博客评论管理
        Route::group(['prefix' => 'comment'], function () {
            Route::get('index', 'CommentController@index'); // 评论列表
            Route::get('destroy/{id}', 'CommentController@destroy'); // 删除评论
            Route::get('restore/{id}', 'CommentController@restore'); // 恢复删除的评论
            Route::get('forceDelete/{id}', 'CommentController@forceDelete'); // 彻底删除评论
        });

        Route::get('personalinf','PersonalinfController@index')->name('personalinf.index');//个人信息展示页面
        Route::post('personalinf/uploads','PersonalinfController@uploads')->name('personalinf.uploads');//个人用户名管理页面
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        Route::post('orders', 'OrdersController@store')->name('orders.store');
	    Route::get('orders', 'OrdersController@index')->name('orders.index');
	    Route::get('allorders', 'OrdersController@allorders')->name('orders.allorders');
        Route::get('details/{order}','OrdersController@details')->name('orders.details');
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
        Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
        Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');
        Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
        Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
	Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');
	Route::post('orders/{order}/cancel','OrdersController@cancelOrder')->name('orders.cancel');
        Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
        
        Route::get('blog/manage', 'BlogController@show')->name('blogs.show');
    });
});

Route::get('products/{product}', 'ProductsController@show')->name('products.show');
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
Route::post('payment/wechat/refund_notify', 'PaymentController@wechatRefundNotify')->name('payment.wechat.refund_notify');
