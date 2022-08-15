<?php

use App\Http\Controllers\backend\BelajarController;
use App\Http\Controllers\backend\CobaController;
use App\Http\Controllers\backend\CobautsController;
use App\Http\Controllers\backend\PenjualanController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\UTSController;
use App\Http\Controllers\Barang;
use App\Http\Controllers\crudController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admin_master');
    })->name('dashboard');
});


Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'Useradd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');
});



Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.view');
Route::get('/penjualanadd', [PenjualanController::class, 'PenjualanAdd'])->name('penjualan.add');
Route::post('/penjualanstore', [PenjualanController::class, 'penjualanStore'])->name('penjualan.store');
Route::get('/penjualanedit/{id}', [PenjualanController::class, 'penjualanEdit'])->name('penjualan.edit');
Route::post('/penjualanupdate/{id}', [PenjualanController::class, 'penjualanUpdate'])->name('penjualan.update');
Route::get('/delete/{id}', [PenjualanController::class, 'penjualanDelete'])->name('penjualan.delete');


// Route::get('/Belajar', [BelajarController::class, 'index'])->name('belajar.view');
// Route::get('/BelajarAdd', [BelajarController::class, 'BelajarAdd'])->name('belajar.add');
// Route::post('/Belajarstore', [BelajarController::class, 'BelajarStore'])->name('belajar.store');
// Route::get('/Belajaredit/{id}', [BelajarController::class, 'BelajarEdit'])->name('belajar.edit');
// Route::post('/Belajarupdate/{id}', [BelajarController::class, 'BelajarUpdate'])->name('belajar.update');


// Route::get('/Belajar', [CobautsController::class, 'index'])->name('cobaUTS.view');
// Route::get('/BelajarAdd', [CobautsController::class, 'BelajarAdd'])->name('cobaUTS.add');
// Route::post('/Belajarstore', [CobautsController::class, 'BelajarStore'])->name('cobaUTS.store');
// Route::get('/Belajaredit/{id}', [CobautsController::class, 'BelajarEdit'])->name('cobaUTS.edit');
// Route::post('/Belajarupdate/{id}', [CobautsController::class, 'BelajarUpdate'])->name('CobaUTS.update');

Route::get('/ViewUts', [UTSController::class, 'index'])->name('uts.view');
Route::get('/AddUts', [UTSController::class, 'UtsAdd'])->name('uts.add');
Route::post('/StoreUts', [UTSController::class, 'UtsStore'])->name('uts.store');
Route::get('/EditUts/{id}', [UTSController::class, 'UtsEdit'])->name('uts.edit');
Route::post('/UpdateUts/{id}', [UTSController::class, 'UtsUpdate'])->name('uts.update');
