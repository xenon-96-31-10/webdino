<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'showIndex'])->name('welcome');

Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'showAboutUs'])->name('aboutUs');
Route::get('/contacts', [App\Http\Controllers\PagesController::class, 'showContacts'])->name('Contacts');
Route::get('/projects', [App\Http\Controllers\PagesController::class, 'showProjects'])->name('Projects');
Route::get('/our-services', [App\Http\Controllers\PagesController::class, 'showOurServices'])->name('ourServices');

Route::get('/stages-of-work', [App\Http\Controllers\PagesController::class, 'showWorkStages'])->name('workStages');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
