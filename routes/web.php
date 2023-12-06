<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
  return view('home', [
    "tittle" => "Home",
    "active" => 'home'
  ]);
});

Route::get('/about', function () {
  return view('about', [
    "tittle" => "About",
    "active" => 'about',
    "name" => "Adam Maulana Kusumah",
    "email" => "213040086@mail.unpas.ac.id",
    "image" => "dams.jpeg"
  ]);
});

Route::get('/posts', [PostController::class, 'index']);

// page for single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// categories
Route::get('/categories', function () {
  return view('categories', [
    'tittle' => 'Post Categories',
    "active" => 'categories',
    'categories' => Category::all()
  ]);
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//dashboard
Route::get('/dashboard', function () {
  return view('dashboard.index');
})->middleware('auth');

//otomatis slug
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
//dashboard post
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

//category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
