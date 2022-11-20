<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_bus;
use App\Http\Controllers\Controller_login;
use App\Http\Controllers\Controller_pemesan;
use App\Http\Controllers\Controller_reservasi;
use App\Http\Controllers\Controller_terminal;
use App\Http\Controllers\Controller_user;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

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

Route::get('/dashboard',[Controller_reservasi::class,'index'])->middleware('auth');


// Terminal
Route::get('/terminal',[Controller_terminal::class, 'index'])->name('terminal');
Route::get('/tambah_terminal',[Controller_terminal::class, 'tambah_terminal'])->name('tambah_terminal');
Route::post('/proses_tambah',[Controller_terminal::class, 'proses_tambah'])->name('proses_tambah');
Route::get('/edit_terminal/{id}',[Controller_terminal::class, 'edit_terminal'])->name('edit_terminal');
Route::post('/proses_edit/{id}',[Controller_terminal::class, 'proses_edit'])->name('proses_edit');
Route::get('/delete/{id}',[Controller_terminal::class, 'delete'])->name('delete');

// Auth dan Regis
Route::get('/login',[Controller_login::class, 'login'])->name('login');
Route::post('/proses_login',[Controller_login::class, 'proses_login'])->name('proses_login');

Route::get('/register',[Controller_login::class, 'register'])->name('register');
Route::post('/proses_register',[Controller_login::class, 'proses_register'])->name('proses_register');
Route::get('/logout',[Controller_login::class, 'logout'])->name('logout');

// Bus
Route::get('/bus', [Controller_bus::class, 'index'])->name('bus'); 
Route::get('/tambahbus', [Controller_bus::class, 'tambahbus']);
Route::post('/insertbus', [Controller_bus::class, 'insertbus']);
Route::get('/edit_bus/{id}', [Controller_bus::class, 'edit_bus']);
Route::post('/updatedata/{id}', [Controller_bus::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [Controller_bus::class, 'delete']);
Route::get('/databulan', [Controller_bus::class, 'databulan']);

// Pemesan
Route::get('/pemesan', [Controller_pemesan::class, 'index'])->name('pemesan');
Route::get('/tambahpemesan', [Controller_pemesan::class, 'tambahpemesan'])->name('tambahpemesan');
Route::post('/insertpemesan', [Controller_pemesan::class, 'insertpemesan'])->name('insertpemesan');
Route::get('/delete_pemesan/{id}', [Controller_pemesan::class, 'delete_pemesan']);
Route::get('/edit_pemesan/{id}', [Controller_pemesan::class, 'edit_pemesan']);
Route::post('/update_pemesan/{id}', [Controller_pemesan::class, 'update_pemesan']);

// Reservasi
Route::get('/tambah_reservasi', [Controller_reservasi::class, 'tambah_reservasi']);


// User view
Route::get('/',[Controller_user::class,'index'])->name('busfast');
Route::post('/insertUserpemesan',[Controller_user::class,'insertUserpemesan']);
Route::get('/reservasi',[Controller_user::class,'reservasipage'])->name('reservasipage');

