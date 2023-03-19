<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


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
    return view('welcome');
});
Auth::routes();

Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');

Route::get('/posts/{id}', function ($id) {
    $post = App\Models\Post::find(1);
    $comments = $post->comments();

    Log::warning("post", [$post, $comments]);
    return view('post_detail', compact('post', 'comments'));
})->name('posts.show')->middleware('auth');
;
Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
