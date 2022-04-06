<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotaluserController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\UserController;
use App\Models\Perjalanan;
use App\Models\User;






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
    return view('auth.login');
});



Auth::routes();

Route::get('/Total_user', [TotaluserController::class,'index'])->name('Total_user');
Route::get('/isi_user', [TotaluserController::class,'create'])->name('isi_user');
Route::post('/store2', [TotaluserController::class,'store'])->name('store user');
Route::get('/edit3/{id}', [TotaluserController::class,'edit'])->name('edit_user');
Route::post('/update3/{id}', [TotaluserController::class, 'update'])->name('update_user');
Route::delete('/delete1/{id}', [TotaluserController::class, 'destroy'])->name('destroy-user');




Route::get('/perjalanan', [PerjalananController::class,'index'])->name('perjalanan');
Route::get('/isi_data', [PerjalananController::class,'create'])->name('isi-data');
Route::post('/store', [PerjalananController::class,'store'])->name('store perjalanan');
Route::get('/edit/{id}', [PerjalananController::class,'edit'])->name('edit-perjalanan');
Route::post('/update/{id}', [PerjalananController::class,'update'])->name('update-perjalanan');
Route::delete('/delete/{id}', [PerjalananController::class, 'destroy'])->name('destroy-perjalanan');




Route::get('/per-user', [UserController::class,'index4'])->name('per-user');
Route::get('/Profile/{id}', [UserController::class, 'edit_user'])->name('edit_user');
Route::put('/Profile_update/{id}', [UserController::class, 'update_user'])->name('profile.update_user');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







