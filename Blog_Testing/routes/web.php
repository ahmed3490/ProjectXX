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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [
  'uses' => 'HomeController@index',
  'as' => 'home'      
]);




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){




Route::get('/post/create', [
'uses' => 'PostController@create',
'as' => 'post.create' 
]); 

Route::get('/category/create', [
'uses' => 'CategoriesController@create',
'as' => 'category.create' 
]); 

 
Route::get('/category/edit/{id}', [
'uses' => 'CategoriesController@edit',
'as' => 'category.edit' 
]); 


Route::get('/category/delete/{id}', [
'uses' => 'CategoriesController@destroy',
'as' => 'category.delete' 
]); 






Route::get('/categories', [
'uses' => 'CategoriesController@index',
'as' => 'categories' 
]); 


Route::post('/post/store', [
'uses' => 'PostController@store',
'as' => 'post.store' 
]); 



Route::post('/category/store', [
'uses' => 'CategoriesController@store',
'as' => 'category.store' 
]); 


Route::post('/category/update/{id}', [
'uses' => 'CategoriesController@update',
'as' => 'category.update' 
]); 


Route::get('notification', 'UserController@notification');






});



