<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryChartController;
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
    return view('welcome');
});

Route::get('formdata', function () {
    return view('formdata');
});

Route::get('categorychart', function () {
    return view('categorychart');
});


Route::get('categorises', [AdminController::class, 'category']);

Route::get('product', [AdminController::class, 'production']);

Route::get('customer', [AdminController::class, 'customer']);

// insert data 
Route::post('category', [AdminController::class, 'insertcategory']);

Route::post('product', [AdminController::class, 'insertproduct']);

Route::post('customer', [AdminController::class, 'insertcustomer']);



// delete data
//รับข้อมูลจาก delete ในทุกๆหน้าที่วาง tag ตัวนี้ ที่เข้าถึง item -> id //method name delete 
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
//[AdminController::class,'delete']   -> delete ตรงส่วนนี้คือการเรียกใช้ function in controller โดยฟังชั่นนี้มีชื่อว่า delete
// Route::get('delete/{id}',[AdminController::class,'delete1'])->name('delete1');
// Route::get('delete/{id}',[AdminController::class,'delete2'])->name('delete2');



// edit data
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::get('editone/{id}',[AdminController::class,'editone'])->name('editone');
Route::get('edittwo/{id}',[AdminController::class,'edittwo'])->name('edittwo');
 


// Route::get('categorychart', [CategoryChartController::class, 'index'])->name('categorychart');
Route::get('/category-chart', [CategoryChartController::class, 'index'])->name('category-chart');
Route::get('/customer-chart', [CategoryChartController::class, 'index2'])->name('customer-chart');