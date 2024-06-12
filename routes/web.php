<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalRecordController; 
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/medicalrecords', [MedicalRecordController::class, 'index'])->name('medicalrecords');

Route::get('/medical-records/add', [MedicalRecordController::class, 'addnewrecord'])->name('medical-records.add');

Route::post('/medical-record/store', [MedicalRecordController::class, 'store'])->name('medical-record.store');

Route::get('/medical-records/{id}/edit', [MedicalRecordController::class, 'edit'])->name('medical-records.edit');

Route::put('/medical-records/{id}', [MedicalRecordController::class, 'update'])->name('medical-records.update');

Route::delete('/medical-records/{id}', [MedicalRecordController::class, 'destroy'])->name('medical-records.destroy');



Route::get('/superadmin/adminlogin', function () {
        return view('superadmin/adminlogin');
    })->name('adminlogin');


Route::get('/superadmin/adminregister', function () {
    return view('superadmin/adminregister');
})->name('adminregister');


Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard');


