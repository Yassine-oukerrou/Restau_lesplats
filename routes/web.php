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

'Auth'::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery/{type}', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blog'])->name('allblogs');
//les plats
Route::get('/plats', [App\Http\Controllers\HomeController::class, 'plats'])->name('plats');
Route::get('/combobox', [App\Http\Controllers\HomeController::class, 'combobox'])->name('combobox');
//CrudPlatsController frontend.plats
Route::get('/Crud', [App\Http\Controllers\CrudPlatsController::class, 'Crud'])->name('Crud');
Route::post('/store', [App\Http\Controllers\CrudPlatsController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\CrudPlatsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\CrudPlatsController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\CrudPlatsController::class, 'delete'])->name('delete');
Route::post('/ajax_search', [App\Http\Controllers\CrudPlatsController::class, 'ajax_search'])->name('ajax_search');
//Crudcombobox
Route::get('/Crudcombobox', [App\Http\Controllers\CrudcomboboxController::class, 'Crudcombobox'])->name('Crudcombobox');
