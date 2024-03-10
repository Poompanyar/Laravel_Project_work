<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//show page
Route::get('/', function() {
    return view('home');
})->name('home');

Route::view('brand', 'brand.brand')->name('brand');
Route::view('category', 'category.category')->name('category');
Route::view('customer', 'customer.customer')->name('customer');
Route::view('promotion', 'promotion.promotion')->name('promotion');



//show data
Route::get('brand', [AdminController::class, 'brand'])->name('brand');
Route::get('category', [AdminController::class, 'category'])->name('category');
Route::get('customer', [AdminController::class, 'customer'])->name('customer');
Route::get('promotion', [AdminController::class, 'promotion'])->name('promotion');



//delete data
Route::get('deleteBrand/{id}', [AdminController::class, 'deleteBrand'])->name('deleteBrand');
Route::get('deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('deleteCategory');
Route::get('deleteCustomer/{id}', [AdminController::class, 'deleteCustomer'])->name('deleteCustomer');
Route::get('deletePromotion/{id}', [AdminController::class, 'deletePromotion'])->name('deletePromotion');

//edit data
Route::get('editBrand/{id}', [Admincontroller::class, 'editBrand'])->name('editBrand');
Route::get('editCategory/{id}', [Admincontroller::class, 'editCategory'])->name('editCategory');
Route::get('editCustomer/{id}', [Admincontroller::class, 'editCustomer'])->name('editCustomer');
Route::get('editPromotion/{id}', [Admincontroller::class, 'editPromotion'])->name('editPromotion');

//update data
Route::post('update/{id}',[Admincontroller::class, 'update'])->name('update');
Route::post('updateCategory/{id}',[Admincontroller::class, 'updateCategory'])->name('updateCategory');
Route::post('updateCustomer/{id}',[Admincontroller::class, 'updateCustomer'])->name('updateCustomer');
Route::post('updatePromotion/{id}',[Admincontroller::class, 'updatePromotion'])->name('updatePromotion');

//create data
Route::get('form', [Admincontroller::class, 'createBrand']);
//insert data
Route::post('insert', [AdminController::class, 'insert']);
Route::post('insert', [AdminController::class, 'insert2']);
Route::post('insert', [AdminController::class, 'insert3']);
Route::post('insert', [AdminController::class, 'insert4']);