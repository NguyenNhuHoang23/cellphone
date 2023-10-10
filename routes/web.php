<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IphoneController;
use App\Http\Controllers\PhoneController;

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
// Route::get('/showphone', [PhoneController::class, 'changeColor']);
// Route::get('/{id}', [PhoneController::class, 'show']);

Route::get('/cellphone', [IphoneController::class, 'view']);
Route::get('/cellphone', [IphoneController::class, 'type']);
Route::get('/insertcellphone', [IphoneController::class, 'insert']);
Route::post('/insert', [IphoneController::class, 'store']);
Route::get('/productdetails', [IphoneController::class, 'details']);
Route::get('/productdetails/{url}', [IphoneController::class, 'detailsproduct']);
Route::get('/cart_cellphone', [IphoneController::class, 'pay']);
// Route::post('/cartCellphone', [IphoneController::class, 'cartCellphone']);
// Route::get('/cartCellphone/{id}', [IphoneController::class, 'showCart']);


// Route::get('/', function () {
//     return view('hello1');
// });


//update.delete.insert
// Route::get('/student', [StudentController::class, 'student']);
// Route::get('/insert', [StudentController::class, 'insert']);
// Route::post('/create', [StudentController::class, 'store']);
// Route::get('/update/{id}', [StudentController::class, 'update'])->name('update.student');
// Route::post('/student/update/{id}', [StudentController::class, 'updatedatabase'])->name('student.update');
// Route::delete('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');




//product
// Route::get('/product', [products::class, 'type1']);
// Route::get('/{param}', [products::class, 'alias']);


// //nhap du lieu
// Route::get('/huhu', [HelloController::class, 'hello']);
// Route::get('/{param}', [InformationController::class, 'name']);

// //in du lieu
// Route::get('/param', [LabController::class, 'information']);
// Route::get('/all', [StaffController::class, 'all']);

// Route::get('/show45', [StaffController::class, 'show45']);

// Route::get('/join', [StaffController::class, 'join']);

// Route::get('/{param}', [StaffController::class, 'showname']);

// Route::get('/user/{param}', [StaffController::class, 'showid']);

//student




