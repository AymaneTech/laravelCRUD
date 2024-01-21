<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts = [];
    if (auth()->check()) {
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
    }
    return view('home', ["posts" => $posts]);
});
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/logout', [\App\Http\Controllers\userController::class, 'logout']);
Route::post('/login', [\App\Http\Controllers\userController::class, 'login']);

// post routes
Route::post("create-post", [PostController::class, "create"]);
Route::get("/edit-post/{post}", [PostController::class, 'showEditScreen']);
Route::put("/edit-post/{post}", [PostController::class, 'updatePost']);
Route::delete("/delete-post/{post}", [PostController::class, 'deletePost']);
