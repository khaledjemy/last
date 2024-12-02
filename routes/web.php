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



//$user = new App\User;
//$user->email = 'example@example.com';
//$user->password = bcrypt('password');
//$user->first_name = '';
//$user->last_name = '';
//$user->status = '1';

//$user->save();



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessangerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;

Route::get('/', [PostController::class, 'index'])->middleware('postowner');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/reg', function(){
    return view('reg');
});
Route::post('/regi', [RegisterController::class, 'reg']);


Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'index1']);


Route::post('/comment', [CommentController::class, 'store']);
Route::post('/commentphoto', [CommentController::class, 'photocommentstore']);
Route::post('/post-reply', [CommentController::class, 'reply_store']);
Route::post('/photo-reply', [CommentController::class, 'photo_reply_store']);


Route::get('profile/{id}', [UsersController::class, 'profile']);
Route::post('/f_action', [UsersController::class, 'friend_action']);


Route::get('/photo/{id}', [PhotoController::class, 'photo'])->middleware('checkphotowner');
Route::post('/make-profile-picture', [PhotoController::class, 'profile_pic']);


Route::post('/like', [ReactController::class, 'react']);


Route::get('/messanger/{id}', [MessangerController::class, 'messangerlol']);
Route::post('/messanger/{id}', [MessangerController::class, 'messangerlol']);
