<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nvk_KhachHang_model;
class nvk_khachHang_controller extends Controller
{
    // List sản phẩm
    public function nvklistKH()
    {
        $nvkkhachhang = nvk_KhachHang_model::all();
        return view('nvkAdmins.nvkKhachHang.nvk-listKH', ['nvkkhachhang' => $nvkkhachhang]);
    }
    //them mowi
    public function nvkcreateKH(){
        return view('nvkAdmins.nvkKhachHang.nvk-createkh');
    }
    public function nvkcreateKHsubmit(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'nvkMakhachhang' => 'required|unique:nvk_khachhang,nvkMakhachhang|max:255',
            'nvkHotenkhachhang' => 'required|max:255',
            'nvkEmail' => 'required|email|unique:nvk_khachhang,nvkEmail|max:255',
            'nvkDienThoai' => 'required|unique:nvk_khachhang,nvkDienThoai|max:255',
            'nvkDiaChi' => 'required|max:255',
            'nvkNgayDK' => 'required|date',
            'nvkTrangThai' => 'required|boolean',
        ]);

        // Tạo một đối tượng mới của model
        $khachHang = new nvk_KhachHang_model();
        $khachHang->nvkMakhachhang = $request->nvkMakhachhang;
        $khachHang->nvkHotenkhachhang = $request->nvkHotenkhachhang;
        $khachHang->nvkEmail = $request->nvkEmail;
        $khachHang->nvkDienThoai = $request->nvkDienThoai;
        $khachHang->nvkDiaChi = $request->nvkDiaChi;
        $khachHang->nvkNgayDK = $request->nvkNgayDK;
        $khachHang->nvkTrangThai = $request->nvkTrangThai;

        // Lưu dữ liệu vào bảng
        $khachHang->save();

        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('nvk.listkhachhang')->with('success', 'Khách hàng được tạo thành công!');
    }
     #chi tiết
     public function nvkchitietkh($id)
     {
         // Tìm bản ghi theo id
         $khachHang = nvk_KhachHang_model::find($id);

         // Kiểm tra nếu không tìm thấy bản ghi
         if (!$khachHang) {
             return redirect('/nvkAdmins/nvkKhachHang')->with('error', 'Không tìm thấy thông tin sản phẩm.');
         }

         // Trả về view với dữ liệu
         return view('nvkAdmins.nvkKhachHang.nvk-chitietkh', ['khachHang' => $khachHang]);
     }

#edit
    public function nvkeditKH($id)
    {
        $khachHang = nvk_KhachHang_model::find($id);

        if (!$khachHang) {
            return redirect()->route('nvk.listkhachhang')->with('error', 'Khách hàng không tồn tại.');
        }

        return view('nvkAdmins.nvkKhachHang.nvk-edit', compact('khachHang'));
    }
#edit submit
    public function nvkeditsubmit(Request $request, $id)
    {
        $request->validate([
            'nvkHotenkhachhang' => 'required|string|max:255',
            'nvkEmail' => 'required|email|max:255',
            'nvkDienThoai' => 'required|string|max:255',
            'nvkDiaChi' => 'required|string|max:255',
            'nvkNgayDK' => 'required|date',
            'nvkTrangThai' => 'required|boolean',
        ]);

        $khachHang = nvk_KhachHang_model::find($id);

        if (!$khachHang) {
            return redirect()->route('nvk.listkhachhang')->with('error', 'Khách hàng không tồn tại.');
        }

        $khachHang->nvkHotenkhachhang = $request->nvkHotenkhachhang;
        $khachHang->nvkEmail = $request->nvkEmail;
        $khachHang->nvkDienThoai = $request->nvkDienThoai;
        $khachHang->nvkDiaChi = $request->nvkDiaChi;
        $khachHang->nvkNgayDK = $request->nvkNgayDK;
        $khachHang->nvkTrangThai = $request->nvkTrangThai;

        $khachHang->save();

        return redirect()->route('nvk.listkhachhang')->with('success', 'Khách hàng đã được cập nhật thành công.');
    }
    #delete
    public function nvkKHdelete($id){
        $khachHang = nvk_KhachHang_model::findOrFail($id);
        $khachHang->delete();
        return redirect()->route('nvk.listkhachhang')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }



}
