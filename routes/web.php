<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/email',[App\Mail\NewUserWelcomeMail::class , 'content']);

Route::post('/follow/{user}', [App\Http\Controllers\FollowsController::class,'store']);

Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::get('/home',[App\Http\Controllers\PostsContoller::class , 'index']);
Route::get('/explore', [App\Http\Controllers\PostsContoller::class,'index2']);
Route::get('/p/create', [App\Http\Controllers\PostsContoller::class, 'create']);
Route::post('/p',[App\Http\Controllers\PostsContoller::class,'store']);
Route::get('/p/{post}' , [App\Http\Controllers\PostsContoller::class,'show']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesContoller::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesContoller::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}',[App\Http\Controllers\ProfilesContoller::class,'update'])->name('profile.update');

Route::get('/search',[App\Http\Controllers\SearchController::class , 'index']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
