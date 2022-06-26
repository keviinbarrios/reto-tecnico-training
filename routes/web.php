<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Auth::routes();

Route::get('/', [HomeController::class,'index']);

Route::get('admin/naves', [AdminController::class,'admin'])->name('admin.naves');

Route::get('admin/naves/create', [NaveController::class,'create'])->name('admin.create');
Route::post('admin/naves/store',[NaveController::class,'store'])->name('admin.store');
Route::get('admin/naves/{nave}/edit',[NaveController::class,'edit'])->name('admin.edit');
Route::post('admin/naves/{nave}/update', [NaveController::class,'update'])->name('admin.update');
Route::delete('/admin/naves/{nave}/delete',[NaveController::class,'delete'])->name('admin.delete');


