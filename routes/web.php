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

Route::get('/test', function () {
    return App\User::find(1)->profile;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix'=>'admin', 'middleware'=>'auth'] ,function(){

    Route::get('/home', 'HomeController@index')->name('home');
    

    Route::get('/post/create',[
        'uses'=>'PostsController@create',
        'as'=>'posts.create'
]);

    Route::post('/post/store',[
        'uses'=>'PostsController@store',
        'as'=>'posts.store'
    ]);

    Route::get('/post/delete/{id}',[
        'uses'=>'PostsController@destroy',
        'as'=>'posts.delete'
    ]);

    Route::get('/post',[
        'uses'=>'PostsController@index',
        'as' => 'posts'
    ]);

    Route::get('/post/trashed',[
        'uses'=>'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);

    Route::get('/post/kill/{id}',[
        'uses'=>'PostsController@kill',
        'as' => 'posts.kill'
    ]);

    Route::get('/post/restore/{id}',[
        'uses'=>'PostsController@restore',
        'as' => 'posts.restore'
    ]);

    Route::get('/post/edit/{id}',[
        'uses'=>'PostsController@edit',
        'as' => 'posts.edit'
    ]);

    Route::post('/post/update/{id}',[
        'uses'=>'PostsController@update',
        'as' => 'posts.update'
    ]);

    Route::get('/category/create',[
        'uses'=>'CategoriesController@create',
        'as'=>'category.create'
    ]);

    Route::post('/category/store',[
        'uses'=>'CategoriesController@store',
        'as'=>'category.store'
    ]);

    Route::get('/categories',[
        'uses'=>'CategoriesController@index',
        'as'=>'categories'
    ]);

    Route::get('/category/edit/{id}',[
        'uses'=>'CategoriesController@edit',
        'as'=>'category.edit'
    ]);

    Route::get('/category/delete/{id}',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'category.delete'
    ]);

    Route::post('/category/update/{id}',[
        'uses'=>'CategoriesController@update',
        'as'=>'category.update'
    ]);

    Route::get('/tag',[
        'uses'=>'TagController@index',
        'as'=>'tags'
    ]);

    Route::get('/tag/create',[
        'uses'=>'TagController@create',
        'as'=>'tags.create'
    ]);

    Route::post('/tag/store',[
        'uses'=>'TagController@store',
        'as'=>'tags.store'
    ]);
    
    Route::get('/tag/edit/{id}',[
        'uses'=>'TagController@edit',
        'as'=>'tags.edit'
    ]);

    Route::post('/tag/update/{id}',[
        'uses'=>'TagController@update',
        'as'=>'tags.update'
    ]);

    Route::get('/tag/delete/{id}',[
        'uses'=>'TagController@destroy',
        'as'=>'tags.delete'
    ]);

    Route::get('/users',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);

    Route::get('/users/create',[
        'uses'=>'UsersController@create',
        'as'=>'users.create'
    ]);

    Route::post('/users/store',[
        'uses'=>'UsersController@store',
        'as'=>'users.store'
    ]);
    
    Route::get('/users/admin/{id}',[
        'uses'=>'UsersController@admin',
        'as'=>'users.admin'
    ]);

    Route::get('/users/not-admin/{id}',[
        'uses'=>'UsersController@not_admin',
        'as'=>'users.not.admin'
    ]);



   


});