<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecondHomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return "<h1>you can contact us</h1>";
// });

// Route::view('contact', "contact");
// Route::view('series/create', 'series.create');
// Route::view('series/premium', 'series.premium.show');

// Route::get('series/premium', function () {
//     $name = "Sudirman";
//     $postBody = "Hello this is first line
//     hello this is the second line
//     hello this is the third line";

//     return View("series.premium.show", ['name' => $name,
//     'body' => $postBody]);
// });

// Route::get('/', function () {
//     return View('bladeexam.home');
// }); 

// you can use Request class from PHP like below or using request function
Route::get('try', function (Request $request) {
    return $request->fullUrl();
});

// using request function
// Route::get('/trysec', function () {
//     // to access fullUrl or path
//     request()->fullUrl();
//     request()->path();


//     return request()->is('trysec') ? "Sama" : "Beda";
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/second', SecondHomeController::class);

// tutorial for pagination
Route::get('posts', [PostController::class, 'indexPaginate']);

// you can add more model binding by set controller to receive more than one parameter based on the order
Route::get("post/{post:slug}", [PostController::class, 'show']);

// create post
Route::get('posts/create', [PostController::class, 'create']);
// store or save data into database
Route::post('posts/store', [PostController::class, 'store']);

// Edit post
Route::get('posts/{post:slug}/edit', [PostController::class, 'edit']);
Route::patch('posts/{post:slug}/edit', [PostController::class, 'update']);

// Delete post
Route::delete('posts/{post:slug}/delete', [PostController::class, 'destroy']);

Route::get('timeline', function () {
    echo "Masuk post yg baru nih";
});

Route::view('contact', 'bladeexam.contact');

Route::view('about', 'bladeexam.about');

Route::view('login', 'bladeexam.login');