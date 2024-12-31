<?php

use App\Http\Controllers\nvk_QuanTri_controller;
use App\Http\Controllers\nvkSP;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nvkSanPham;
use App\Http\Controllers\nvk_khachHang_controller;
use App\Http\Controllers\nvk_hoadon_controller;
use App\Http\Controllers\nvk_cthoadon_controller;
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
#----------------------Loại sản phẩm----------------------
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
#----------------------Quản trị----------------------
#list quan tri
Route::get('/nvkAdmins/nvk-listqt',[nvk_QuanTri_controller::class,'nvklistQT'])->name('nvk-admins-listQT');
#insert
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-createQT',[nvk_QuanTri_controller::class,'nvkcreatQT'])->name('admin-nvk.createQT');
#insert submit
Route::post('/nvkAdmins/nvk-loai-san-pham/nvk-createQT',[nvk_QuanTri_controller::class,'nvkcreatQTsubmit'])->name('admin-nvk.createsubmitQT');
#chi tiết
Route::get('/nvkAdmins/nvk-loai-san-pham/nvk-chitietQTQT/{id}',[nvk_QuanTri_controller::class,'nvkchitietqt'])->name('admin-nvk.chitietqt');
#----------------------Sản phẩm----------------------
#list
Route::get('/nvkAdmins/nvk-san-pham',[nvkSanPham::class,'nvklist'])->name('admin-nvk.listsp');
#xóa
Route::get('/nvkAdmins/nvk-san-pham/nvk-delete/{id}', [nvkSanPham::class, 'nvkdelete'])->name('admin-nvk.delete');
#chi tiết
Route::get('/nvkAdmins/nvk-san-pham/nvk-chitiet/{id}',[nvkSanPham::class,'nvkchitiet'])->name('admin-nvk.chitietsp');
#insert
Route::get('/nvkAdmins/nvk-san-pham/nvk-createsp',[nvkSanPham::class,'nvkcreatsp'])->name('admin-nvk.createsp');
#insert submit
Route::post('/nvkAdmins/nvk-san-pham/nvk-createsp',[nvkSanPham::class,'nvkcreatsubmitsp'])->name('admin-nvk.createsubmitsp');
#edit
Route::get('/nvkAdmins/nvk-san-pham/nvk-edit/{nvkID}',[nvkSanPham::class,'nvkeditsp'])->name('admin-nvk.editsp');
Route::post('/nvkAdmins/nvk-san-pham/nvk-edit/{nvkID}',[nvkSanPham::class,'nvkeditsubmitsp'])->name('admin-nvk.editsubmitsp');
#----------------------Khách hàng----------------------
#Khách Hàng
Route::get('/nvkAdmins/nvkKhachHang',[nvk_khachHang_controller::class, 'nvklistKH'])->name('nvk.listkhachhang');
#create khach hang
Route::get('/nvkAdmins/nvkKhachHang/createkhachHang',[nvk_khachHang_controller::class,'nvkcreateKH'])->name('nvk.craeteKHcreate');
#create submit
Route::post('/nvkAdmins/nvkKhachHang/createkhachHang',[nvk_khachHang_controller::class,'nvkcreateKHsubmit'])->name('nvk.createKH.createsubmit');
#chi tiệt
Route::get('/nvkAdmins/nvkKhachHang/chitiet/{id}',[nvk_khachHang_controller::class,'nvkchitietkh'])->name('nvk.chitietkh');
#edit
Route::get('/nvkAdmins/nvkKhachHang/editkhachHang/{id}', [nvk_khachHang_controller::class, 'nvkeditKH'])->name('nvk.editKH');
#edit submit
Route::post('/nvkAdmins/nvkKhachHang/editkhachHang/{id}', [nvk_khachHang_controller::class, 'nvkeditsubmit'])->name('nvk.editKHsubmit');
#delete
Route::get('/nvkAdmins/nvkKhachHang/deletekhachhang/{id}',[nvk_khachHang_controller::class,'nvkKHdelete'])->name('nvk.deleteKH');
#----------------------Hóa đơn----------------------
#Hóa Đơn
Route::get('/nvkAdmins/nvkHoaDon',[nvk_hoadon_controller::class,'nvklistHD'])->name('nvk.listHD');
#create
Route::get('/nvkAdmins/nvkHoaDon/nvk-craeteHD',[nvk_hoadon_controller::class,'nvkcreathd'])->name('nvk.createHD');
#create submit
Route::post('/nvkAdmins/nvkHoaDon/nvk-craeteHD',[nvk_hoadon_controller::class,'nvkcreathdsubmit'])->name('nvk.createsubmitHD');
#chi tiết hóa đơn
Route::get('/nvkAdmins/nvkHoaDon/chitiet/{id}', [nvk_hoadon_controller::class,'ttchitiethd'])->name('nvk.chitietHD');
#edit
Route::get('/nvkAdmins/nvkHoaDon/nvk_editHD/{id}', [nvk_hoadon_controller::class, 'nvkedithd'])->name('nvk.editHD');
#edit submit
Route::post('/nvkAdmins/nvkHoaDon/nvk_editHD/{id}', [nvk_hoadon_controller::class, 'nvkeditHDsubmit'])->name('nvk.editHDsubmit');
#delete hoa đơn
Route::get('/nvkAdmins/nvkHoaDon/nvk-deleteHD/{id}',[nvk_hoadon_controller::class,'nvkHDdelete'])->name('nvk.deleteHd');
#----------------------Chi tiết hóa đơn----------------------
# líst
Route::get('/nvkAdmins/nvkCTHoaDon',[nvk_cthoadon_controller::class,'nvklistCTHD'])->name('nvk.listCTHD');
# thêm mới
Route::get('/nvkAdmins/nvkCTHoaDon/Create-CTHD',[nvk_cthoadon_controller::class,'nvkcreatecthd'])->name('nvk.createCTHD');
# thêm mới submit
Route::post('/nvkAdmins/nvkCTHoaDon/Create-CTHD',[nvk_cthoadon_controller::class,'nvkcreatecthdsubmit'])->name('nvk.createsubmitCTHD');
# chi tiết
Route::get('/nvkAdmins/nvkCTHoaDon/ChiTiet-CTHD/{id}', [nvk_cthoadon_controller::class, 'nvkchitietcthd'])->name('nvk.chitietCTHD');
# edit
Route::get('/nvkAdmins/nvkCTHoaDon/Edit-CTHD/{id}', [nvk_cthoadon_controller::class, 'nvkeditcthd'])->name('nvk.editCTHD');
# edit submit
Route::post('/nvkAdmins/nvkCTHoaDon/Edit-CTHD/{id}', [nvk_cthoadon_controller::class, 'nvkeditCTHDsubmit'])->name('nvk.editsubmitCTHD');
# delete
Route::get('/nvkAdmins/nvkCTHoaDon/delete-CTHD/{id}', [nvk_cthoadon_controller::class, 'nvkCTHDdelete'])->name('nvk.deleteCTHD');
