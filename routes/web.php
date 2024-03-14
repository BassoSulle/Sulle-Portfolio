<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\adminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'aboutme'])->name('aboutme');
Route::get('/articles', [IndexController::class, 'articles'])->name('articles');
Route::get('/projects', [IndexController::class, 'projects'])->name('projects');
Route::get('/project_details', [IndexController::class, 'project_details'])->name('project_details');
Route::get('/researches', [IndexController::class, 'researches'])->name('researches');
Route::get('/books', [IndexController::class, 'books'])->name('books');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');


//Admin Routes.
Route::get('/admin', [adminController::class, 'index'])->name('dashboard');
Route::get('/article-list', [adminController::class, 'article'])->name('article-list');
Route::get('/book-list', [adminController::class, 'books'])->name('book-list');
Route::get('/project-list', [adminController::class, 'projects'])->name('project-list');
Route::get('/research-list', [adminController::class, 'research'])->name('research-list');
Route::get('/add_article', [adminController::class, 'add_article'])->name('add_article');
Route::get('/add_book', [adminController::class, 'add_book'])->name('add_book');
Route::get('/add_project', [adminController::class, 'add_project'])->name('add_project');
Route::get('/add_research', [adminController::class, 'add_research'])->name('add_research');