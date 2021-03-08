<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;


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

// Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/',[PagesController::class, 'index']);

Route::get('static',[PagesController::class, 'static']);

Route::get('products',[PagesController::class, 'publish']);

Route::get('product1',[PagesController::class, 'product1']);

Route::get('product/{id}',[PagesController::class, 'product']);

Route::get('about',[PagesController::class, 'about']);

Route::get('contact',[PagesController::class, 'contact']);

Route::get('login',[PagesController::class, 'login']);

Route::get('logout',[PagesController::class, 'logout']);

Route::get('publish',[PagesController::class, 'publish']);

Route::post('login_me',[PagesController::class, 'login_me']);

Route::get('register',[PagesController::class, 'register']);

Route::post('register_me',[PagesController::class, 'register_me']);

Route::get('dashboard',[PagesController::class, 'dashboard']);

Route::post('dashboard',[PagesController::class, 'dashboard']);

Route::get('insert',[PagesController::class, 'insert']);

Route::get('delete/{id}',[PagesController::class, 'delete']);

Route::get('read/{id}',[PagesController::class, 'read']);

Route::get('update/{id}',[PagesController::class, 'update']);

Route::get('admin',[PagesController::class, 'admin']);

Route::post('admin_me',[PagesController::class, 'admin_me']);

Route::post('insert_product',[PagesController::class, 'insert_product']);

Route::post('update_product',[PagesController::class, 'update_product']);


