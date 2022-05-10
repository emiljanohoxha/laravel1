<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryConfigurationKeysController;
// use App\Http\Middleware\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('category', [CategoryConfigurationKeysController::class, 'index'])->name('category.category');
Route::post('category', [CategoryConfigurationKeysController::class, 'store'])->name('category.store');

Route::get('category/create', [CategoryConfigurationKeysController::class, 'create'])->name('category.create');
Route::get('edit/{id}', [CategoryConfigurationKeysController::class, 'edit'])->name('category.edit');
Route::put('update/', [CategoryConfigurationKeysController::class, 'update'])->name('category.update');
Route::get('destroy/{id}', [CategoryConfigurationKeysController::class, 'destroy'])->name('category.destroy');

});
