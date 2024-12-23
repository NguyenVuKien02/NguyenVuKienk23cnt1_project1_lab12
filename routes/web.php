<?php

use App\Http\Controllers\nvk_QuanTri_controller;
use App\Http\Controllers\nvkSP;
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
#Admin route
Route::get('/nvk-admins',function(){
    return view('nvkAdmins.index');
});
#list
Route::get('/nvkAdmins/nvk-loai-san-pham',[nvkSP::class,'nvklist'])->name('admin-nvk.list');
#insert
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-create',[nvkSP::class,'nvkcreat'])->name('admin-nvk.create');
#insert submit
Route::post('/nvkAdmins/nvk-loai-san-pham/nvk-create',[nvkSP::class,'nvkcreatsubmit'])->name('admin-nvk.createsubmit');
#chi tiết
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-chitiet/{id}',[nvkSP::class,'nvkchitiet'])->name('admin-nvk.chitiet');
#edit
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-edit/{id}',[nvkSP::class,'nvkedit'])->name('admin-nvk.edit');
Route::post('/nvkAdmins/nvk-loai-san-pham/nvk-edit/{id}',[nvkSP::class,'nvkeditsubmit'])->name('admin-nvk.editsubmit');
#xóa
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-delete/{id}', [nvkSP::class, 'nvkdelete'])->name('admin-nvk.delete');
#trangchủ
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-trangchu', [nvkSP::class, 'nvktrangchu'])->name('admin-nvk.loaisanpham.trangchu');
#databoard
Route::get('/nvkAdmins/nvk-trangchu', [nvkSP::class, 'datataboard'])->name('admin-nvk.trangchu');
#login
Route::get('/nvkAdmins/nvk-login', [nvk_QuanTri_controller::class, 'nvkLogin'])->name('admin-nvk.login');
Route::post('/nvkAdmins/nvk-login', [nvk_QuanTri_controller::class, 'nvkLoginsubmit'])->name('admin-nvk.loginsubmit');
#home-logout
Route::get('/home', [nvk_QuanTri_controller::class, 'nvklogout'])->name('home');
#list quan tri
Route::get('/nvkAdmins/nvk-listqt',[nvk_QuanTri_controller::class,'nvklistQT'])->name('nvk-admins-listQT');
#insert
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-createQT',[nvk_QuanTri_controller::class,'nvkcreatQT'])->name('admin-nvk.createQT');
#insert submit
Route::post('/nvkAdmins/nvk-loai-san-pham/nvk-createQT',[nvk_QuanTri_controller::class,'nvkcreatQTsubmit'])->name('admin-nvk.createsubmitQT');
#chi tiết
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-chitietQTQT/{id}',[nvk_QuanTri_controller::class,'nvkchitietqt'])->name('admin-nvk.chitietqt');
