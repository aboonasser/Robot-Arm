<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ConnectArmController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::namespace('Backend')->group(function ()
{
    Route::get('/add',[ConnectArmController::class,'Create']);
    Route::POST('/add/save',[ConnectArmController::class,'store'])->name('Arm.store');
    Route::get('/show',[ConnectArmController::class,'index'])->name('Arm.show');
    Route::get('/see',[ConnectArmController::class,'call'])->name('Arm.show');


});
