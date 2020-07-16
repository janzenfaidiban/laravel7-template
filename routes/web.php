<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// ADMINISTRATOR ROUTES

Route::get('/administrator/login', 'AdministratorController@login');

Route::get('/', 'AdministratorController@index');
Route::get('/administrator', 'AdministratorController@index');
Route::get('/administrator/dashboard', 'AdministratorController@index');

// Posts
Route::get('/administrator/posts', 'PostsController@index');
Route::get('/administrator/posts/all', 'PostsController@index');
Route::get('/administrator/posts/category/{category:slug}', 'PostsController@category');
Route::get('/administrator/posts/new', 'PostsController@new');
Route::post('/administrator/posts/store', 'PostsController@store');
Route::get('/administrator/posts/view/{post:id}', 'PostsController@view');
Route::delete('/administrator/posts/{post:id}/delete', 'PostsController@destroy');

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
