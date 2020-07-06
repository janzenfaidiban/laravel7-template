<?php

use Illuminate\Support\Facades\Route;

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

// ADMINISTRATOR ROUTES

Route::get('/administrator', 'AdministratorController@index');

// Posts
Route::get('/administrator/posts', 'PostsController@index');
Route::get('/administrator/posts/all', 'PostsController@all');
Route::get('/administrator/posts/new', 'PostsController@new');

// Categories
Route::get('/administrator/category', 'CategoryController@index');
Route::get('/administrator/category/all', 'CategoryController@all');
Route::get('/administrator/category/new', 'CategoryController@new');

// Tags
Route::get('/administrator/tags', 'TagsController@index');
Route::get('/administrator/tags/all', 'TagsController@all');
Route::get('/administrator/tags/new', 'TagsController@new');

// Pages
Route::get('/administrator/pages', 'PagesController@index');
Route::get('/administrator/pages/all', 'PagesController@all');
Route::get('/administrator/pages/new', 'PagesController@new');

// Media
Route::get('/administrator/media', 'MediaController@index');
Route::get('/administrator/media/all', 'MediaController@all');
Route::get('/administrator/media/new', 'MediaController@new');

// Appearance

// Settings
