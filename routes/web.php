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
Route::get('index', 'IndexController@showIndexPage');
Route::get('/', 'IndexController@showIndexPage');

Route::get('/login', function () {
    return view('login');
});
//admin route
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/', 'IndexController@showAdminPage');

    Route::get('/admin/danh-muc-tai-lieu', 'DocumentController@showDocumentCategory');

    Route::post('/admin/docCateUpdate', 'DocumentController@updateDocumentCategory');
    Route::get('/admin/docCateUpdate', 'DocumentController@updateDocumentCategory');

    Route::post('/admin/docCateInsert', 'DocumentController@insertDocumentCategory');
    Route::get('/admin/docCateInsert', 'DocumentController@insertDocumentCategory');

    Route::get('/admin/user', 'UserController@showUserList');

    Route::get('/admin/userUpdate', 'UserController@updateUser');
    Route::post('/admin/userUpdate', 'UserController@updateUser');

    Route::get('/admin/userUpdateDocCate', 'UserController@updateUserDocumentCategory');
    Route::post('/admin/userUpdateDocCate', 'UserController@updateUserDocumentCategory');

    Route::get('/admin/register', 'UserController@registerUser');
    Route::post('/admin/register', 'UserController@registerUser');

    Route::get('/admin/updateUser', 'UserController@updateUserInfo');
    Route::post('/admin/updateUser', 'UserController@updateUserInfo');

    Route::get('/document/{id}', 'DocumentController@getDocumentGroup');

    Route::get('/download-document/{id}', 'DocumentController@downloadFile');

    Route::get('/admin/document-manager', 'DocumentController@getDocumentManagerList');
});
//user route
Route::middleware(['auth'])->group(function (){
    Route::get('/uploadDocument', 'DocumentController@uploadDocument');
    Route::post('/uploadDocument', 'DocumentController@uploadDocument');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');