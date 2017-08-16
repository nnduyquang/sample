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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/facebook', function () {
    return view('facebook.index');
});
Route::get('/category', function () {
    return view('m-category');
});
Route::get('/sml_login', function () {
    return view('backend.login.login1');
});

Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');
Route::post('/sendmail', ['as' => 'mail.send', 'uses' => 'MailController@send']);
Route::group(['middleware' => ['auth']], function () {
    //DASHBOARD
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
//    Route::get('sml_admin/config/email', function () {
//        return view('backend.admin.config.mail');
//    })->name('config.email');
    //USER
    Route::resource('sml_admin/users', 'UserController');


    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //NEWS
    Route::get('sml_admin/news', ['as' => 'news.index', 'uses' => 'NewsController@index', 'middleware' => ['permission:news-list|news-create|news-edit|news-delete']]);
    Route::post('sml_admin/news/create', ['as' => 'news.store', 'uses' => 'NewsController@store', 'middleware' => ['permission:news-create']]);
    Route::post('sml_admin/news', ['as' => 'news.search', 'uses' => 'NewsController@search']);
    Route::get('sml_admin/news/create', ['as' => 'news.create', 'uses' => 'NewsController@create', 'middleware' => ['permission:news-create']]);
    Route::get('sml_admin/news/{id}/edit', ['as' => 'news.edit', 'uses' => 'NewsController@edit', 'middleware' => ['permission:news-edit']]);
    Route::patch('sml_admin/news/{id}', ['as' => 'news.update', 'uses' => 'NewsController@update', 'middleware' => ['permission:news-edit']]);
    Route::delete('sml_admin/news/{id}', ['as' => 'news.destroy', 'uses' => 'NewsController@destroy', 'middleware' => ['permission:news-delete']]);

    //CONFIG
    //--MAIL--//
    Route::get('sml_admin/cau-hinh/mail', ['as' => 'config-email.index', 'uses' => 'CauHinhController@getAllCauHinh']);
    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigController@getEmailConfig']);
    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigController@saveEmailConfig']);
});

