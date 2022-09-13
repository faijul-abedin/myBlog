<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\postController;
use App\Http\Controllers\StudentController;
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

Route::view('/', 'frontEnd.home')->name('home');
Route::view('/about', 'frontEnd.about')->name('about');
Route::view('/contact', 'frontEnd.contact')->name('contact');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/user/{id?}/{name?}', function($userId="0", $userName="Fahad") {
    return view('user.index',[
        'userId' => $userId,
        'userName' => $userName
    ]);
});

Route::get('post', [PostController::class, 'index'])->name('post.index');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/post/store', [PostController::class, 'store'])->name('post.store');


Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::put('post/update/{id}', [PostController::class, 'update'])->name('post.update');

Route::delete('post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/greeting/{title}', [GreetingController::class, 'showMessage']);

Route::resource('photos', PhotoController::class);

Route::get('/student', StudentController::class);