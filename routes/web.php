<?php

Auth::routes();
Route::get('/', 'MainController@index');

Route::get('/session',function(){

    dd(csrf_token());
});

Route::post('/functions_images', 'FunctionsController@index');
Route::post('/functions_image', 'FunctionsController@main_image');
Route::post('/functions_form', 'FunctionsController@form');
Route::post('/functions_form_logo', 'FunctionsController@form_logo');
Route::post('/functions_logo', 'FunctionsController@add_logo');
Route::get('/home', 'HomeController@index');

Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

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
    Route::post('/add_center','Admin\TradeCenterController@add_center')->name('add_center');

    Route::get('/edit_trade_center/{operation}','Admin\TradeCenterController@edit');
    Route::get('/edit_center/{id}','Admin\TradeCenterController@edit_center');
    Route::post('/update_center','Admin\TradeCenterController@update_center')->name('add_center');

    Route::get('/parking_prices/{id}','Admin\TradeCenterController@parking_prices');
    Route::post('/update_center_price','Admin\TradeCenterController@update_center_price');

    Route::get('/centers/{center_id}/parking_prices/{id}/delete', 'Admin\TradeCenterController@parking_price_delete')
        ->name('parking_price_delete');


    Route::get('/add_adv_section','Admin\AdvController@index');
    Route::post('/add_adv','Admin\AdvController@add_adv');

    Route::get('/edit_adv_section/{operation}','Admin\AdvController@edit');
    Route::get('/edit_adv/{id}','Admin\AdvController@edit_adv');
    Route::post('/update_adv','Admin\AdvController@update_adv');


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

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

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

// -----------------------------------------------------------
// 23.05.2017
Route::group([
    'as' => 'api.',
    'prefix' => 'api/v1',
    'namespace' => 'Api',
    //'middleware' => ['web','auth']
], function($router) {

    // Clients
    $router->resource('clients', 'ClientsController@index');

});


// авторизация приложения для доступа к данным пользователя...
$router->get('/authorize', 'HomeController@showAuthorizationForm')->middleware('web');
$router->post('/authorize', 'HomeController@authorizeApp')->middleware('web');

Route::get('/home', 'HomeController@index');
