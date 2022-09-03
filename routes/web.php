<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerPost;

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

Route::get('/add',[controllerPost::class,"addPost"])->name('post.add');
Route::post('/add',[controllerPost::class,"savepost"])->name('save.post');
Route::get('/list',[controllerPost::class,"postlist"])->name('post.list');
Route::get('/edit/{id}',[controllerPost::class,"postedit"])->name('post.edit');
Route::get('/delete/{id}',[controllerPost::class,"postdelete"])->name('post.delete');
Route::post('/edit',[controllerPost::class,"updatepost"])->name('update.post');