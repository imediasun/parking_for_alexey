<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', 'MainController@index');
/*Route::get('/admin', 'AdminController@index');
Route::get('/admin/customers_managment', 'AdminController@customers_managment');
Route::get('/admin/add_good', 'AdminController@add_good');
Route::get('/admin/add_logos', 'AdminController@add_logos');
Route::get('/admin/del_good', 'AdminController@del_good');*/
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/session',function(){

    dd(csrf_token());
});

Route::post('/functions_images', 'FunctionsController@index');
Route::post('/functions_image', 'FunctionsController@main_image');
Route::post('/functions_form', 'FunctionsController@form');
Route::post('/functions_form_logo', 'FunctionsController@form_logo');
Route::post('/functions_logo', 'FunctionsController@add_logo');
Route::get('/home', 'HomeController@index');
Route::get('/good/{id}', 'GoodController@index')->where('id', '[0-9]+')->name('good');
Route::get('/cabinet/{id}', 'PrivateCabinetController@index')->where('id', '[0-9]+');
Route::get('/cabinet/orders/{id}', 'PrivateCabinetController@orders')->where('id', '[0-9]+');
Route::get('/cabinet/likes/{id}', 'PrivateCabinetController@likes')->where('id', '[0-9]+');
Route::get('/cabinet/messages/{id}', 'PrivateCabinetController@messages')->where('id', '[0-9]+');
Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::get('/good_added', function () {
    return view('good');
})->name('good_added');

Route::get('/good_added', function () {
    return view('partner');
})->name('partner_added');

Route::get('/not_yours', function () {
    return view('not_yours');
})->name('not_yours');

Route::get('/logout',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);

//admin
Route::group(['prefix' => 'admin','middleware'=>['web','auth']],function(){

    Route::get('/add_trade_center','Admin\TradeCenterController@index');
    Route::get('/edit_trade_center/{operation}','Admin\TradeCenterController@edit');
    
    Route::get('/edit_center/{id}','Admin\TradeCenterController@edit_center');
    
    Route::post('/add_center','Admin\TradeCenterController@add_center')->name('add_center');
    Route::post('/update_center','Admin\TradeCenterController@update_center')->name('add_center');
       //admin
    Route::get('/super_admin','Admin\SuperAdminIndexController@index')->name('super_admin');
    Route::get('/shop_admin','Admin\ShopAdminIndexController@index')->name('shop_admin');
    Route::get('/center_admin','Admin\CenterAdminIndexController@index')->name('center_admin');
    Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
    Route::post('/func_update_role', 'FunctionsController@role');
    Route::post('/func_delete_user', 'FunctionsController@delete_user');

    Route::get('/add_logos','Admin\PertnersController@add_logos');
    Route::get('/del_logos','Admin\PertnersController@del_logos');
    Route::get('/categories','Admin\CategoriesController@index');
    Route::get('/partners','Admin\PertnersController@index');
    Route::get('/add_category','Admin\CategoriesController@add_category');
    Route::resource('/customers_managment','Admin\CustomersController');
});
/*Route::get('sendmail','')*/
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/add_to_cart/{id}','ShopingCartController@addToCart')->name('add_to_cart');
Route::get('/shoping_cart','ShopingCartController@getCart')->name('shoping_cart');
Route::get('/checkout','ShopingCartController@getCheckout')->name('checkout');
Route::get('/delete_product_by_one/{id}','ShopingCartController@delete_product_by_one')->name('delete_product_by_one');
Route::get('/delete_products/{id}','ShopingCartController@delete_products')->name('delete_products');

Route::post('/add_comment','FunctionsController@addComment')->name('add_comment');
Route::post('/add_question_answer','FunctionsController@addQuestion_answer')->name('add_question_answer');
Route::post('/add_question','FunctionsController@addQuestion')->name('add_question');
Route::post('/delete_question','FunctionsController@deleteQuestion')->name('delete_question');
Route::post('/delete_logotype','FunctionsController@deleteLogotype');
Route::post('/delete_comment','FunctionsController@deleteComment')->name('delete_comment');
Route::post('/add_category','FunctionsController@addCategory')->name('add_category');
Route::post('/update_user_info','FunctionsController@update_user_info')->name('update_user_info');
Route::post('/update_customer_info','FunctionsController@update_customer_info')->name('update_customer_info');
Route::post('/func_change_status','FunctionsController@func_change_status');
Route::post('/func_like_change','FunctionsController@func_like_change');
Route::get('/func_like_delete/{id}/{user}','FunctionsController@func_like_delete')->name('func_like_delete');





$router->group(['prefix' => 'api/v1'], function ($router) {
    // Аутентификация приложений...
    $router->post('/auth/app', 'Api\AuthController@authenticateApp');

    // Аутентификация пользователей...
    $router->post('/auth/user', 'Api\AuthController@authenticateUser')->middleware('auth.api.app');
    $router->post('/auth/user/logout', 'Api\AuthController@logoutUser')->middleware('auth.api.user');

    // Тестовые  маршруты
    $router->post('/application-data', 'Api\HomeController@appData')->middleware('auth.api.app');
    $router->get('/user-data', 'Api\HomeController@userData');
});

// авторизация приложения для доступа к данным пользователя...
$router->get('/authorize', 'HomeController@showAuthorizationForm')->middleware('web');
$router->post('/authorize', 'HomeController@authorizeApp')->middleware('web');











Auth::routes();

Route::get('/home', 'HomeController@index');
