<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

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

Route::get('dashboard/doctor',[DoctorController::class,'index']);
Route::get('dashboard/doctor/add',[DoctorController::class,'add'])->name('doctor.add');
Route::get('dashboard/doctor/view/{id}',[DoctorController::class,'view'])->name('doctor.view');
Route::get('dashboard/doctor/edit/{id}',[DoctorController::class,'edit'])->name('doctor.edit');
Route::post('dashboard/doctor/submit',[DoctorController::class,'insert'])->name('doctor.submit');
Route::post('dashboard/doctor/update',[DoctorController::class,'update'])->name('doctor.update');

require __DIR__.'/auth.php';
