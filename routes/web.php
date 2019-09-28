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

Route::get('/', function () {return view('blog');});
Route::get('/posts','PostsController@create');//protect
Route::post('/posts','PostsController@store');
Route::get('/','PostsController@index');
Route::post('/search','PostsController@search');
Route::post('/search_book','PostsController@search_book');
Route::get('/search','PostsController@search2');
Route::get('/search_book','PostsController@search_book2');
Route::get('/article/{name?}','PostsController@article')->name('posts');
Route::get('/book/{name?}','PostsController@books_download')->name('book_Route');
Route::get('/sing','PostsController@index3');
Route::get('/view_post','PostsController@index2');//protect
Route::get('/post_detail/{slug?}','PostsController@show'); // no-need
Route::post('/view_post/{slug?}/delete','PostsController@destroy');
Route::get('/view_post/{slug?}/edit', 'PostsController@edit');//protect
Route::post('/view_post/{slug?}/edit', 'PostsController@update');

//////////////////////Start FAQ/////////////////////////
Route::get('/insert_faq', 'FaqController@index'); //protect
Route::get('/faq', 'FaqController@index2'); //protect
Route::post('/insert_faq', 'FaqController@store');

Route::get('/view_faq', 'FaqController@view_faq');//protect

Route::get('/faq_update/{slug?}/edit', 'FaqController@edit');//protect
Route::post('/faq_update/{slug?}/edit', 'FaqController@update');

Route::post('/faq_delete/{slug?}/delete','FaqController@destroy');
//////////////////end FAQ/////////////////////////////////////////

Auth::routes();

Route::get('/blog', 'HomeController@index')->name('blog');
Route::get('/view_user', 'UserController@index');
////////////////////end of user


////////start of category/////////////////////
Route::get('/view_category', 'CategoryController@view_cateogry');//protect
Route::get('/insert_category', 'CategoryController@insert_cateogry');//protect
Route::post('/insert_category', 'CategoryController@store');
Route::get('/category_update/{id?}/edit', 'CategoryController@edit');//protect
Route::post('/category_delete/{id?}/delete','CategoryController@destroy');
Route::post('/category_update/{id?}/edit', 'CategoryController@update');
/// ////////end of category/////////////////////

///////////////////start of contact/////////////////////////
Route::get('/contact', 'ContactController@insert_contact');//protect
Route::post('/contact', 'ContactController@store');
//Route::get('/detail_comment', 'ContactController@detail_comment');
Route::get('/view_contact', 'ContactController@view_contact');
Route::post('/view_contact/{id?}/delete','ContactController@destroy');
///////////////////end of contact/////////////////////////

////////////////////////////////////////////////////
Route::get('/books','BooksController@create');//protect
Route::post('/books','BooksController@store');
Route::get('/dowload','BooksController@index');
Route::get('/dowload/{slug?}','BooksController@index3')->name('download');
Route::get('/view_book','BooksController@index2');//protect
Route::post('/view_book/{slug?}/delete','BooksController@destroy');
Route::get('/view_book/{slug?}/edit', 'BooksController@edit');//protect
Route::post('/view_book/{slug?}/edit', 'BooksController@update');
/// ///////////////////////////////////////////////