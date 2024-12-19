<?php

use App\Http\Controllers\nvk_QuanTri_controller;
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
Route::get('/admin/nvk-login',[nvk_QuanTri_controller::class,'nvkLogin'])->name('login.nvklog');
Route::post('/admin/nvk-login',[nvk_QuanTri_controller::class,'nvkLoginsubmit'])->name('login.nvklogsubmit');
