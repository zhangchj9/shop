<?php

// Route::get('/', function () {
//     // return view('welcome');
//     echo "test"; 
// });

// Route::redirect('/', '/products')->name('root');
Route::redirect('/', '/index');
Route::get('/index', 'IndexController@index')->name('root');
Route::get('/products', 'ProductsController@index')->name('products.index');

Route::get('/blog', 'IndexController@blogIndex')->name('blogs.index'); //文章列表, blogIndex分配了一个$assign变量到对应的blade中去了
Route::get('blog/{id}', 'IndexController@article'); //文章详情页

// 对博客进行测试，看id不存在为由何所导致
Route::get('/blogTest', 'IndexController@test'); //文章列表测试

Route::get('tag/{id}', 'IndexController@tag');
Route::get('search', 'IndexController@search');
Route::get('category/{id}', 'IndexController@category');

//Route::get('auth/geetest', 'GetGeetestController@getGeetest');//验证码
Route::get('auth/geetest','Auth\AuthController@getGeetest');
// Route::post('/register','ZhanshiController@index')->name('zhanshi');
// Route::get('/register', 'ZhanshiController@index2')->name('123');


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
    Route::get('/questionnaire','QuestionnaireController@index');//跳转到问卷页�?
    Route::post('questionnaire', 'QuestionnaireController@store')->name('questionnaire.store');
    Route::group(['middleware' => 'email_verified'], function() {
        Route::post('comment', 'IndexController@comment'); //上传评论
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
