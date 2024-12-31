<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nvk_hoadon_model;
use App\Models\nvk_KhachHang_model;

class nvk_hoadon_controller extends Controller
{
    public function nvklistHD()
    {
        $nvkHoaDon = nvk_hoadon_model::paginate(5);
        return view('nvkAdmins.nvkHoaDon.nvk-listHD', ['nvkHoaDon' => $nvkHoaDon]);
    }
    #insert
    public function nvkcreathd()
    {
        // Lấy danh sách khách hàng để chọn
        $nvkkhachhang = nvk_KhachHang_model::all();
        return view('nvkAdmins.nvkHoaDon.nvk-create-HD', ['nvkkhachhang' => $nvkkhachhang]);
    }

    #insert submit
    public function nvkcreathdsubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'nvkMakhachhang' => 'required|exists:nvk_khachhang,id',
            'nvkMaHoaDon' => 'required|string|unique:nvk_hoadon,nvkMaHoaDon',
            'nvkNgayHoaDon' => 'required|date',
            'nvkHotenKhachHang' => 'required|string|max:255',
            'nvkEmail' => 'nullable|email|max:255',
            'nvkDienThoai' => 'nullable|string|max:255',
            'nvkDiaChi' => 'nullable|string|max:255',
            'nvkTongGiaTri' => 'required|numeric|min:0',
            'nvkTrangThai' => 'required|boolean',
        ]);

        // Giới hạn giá trị nvkTongGiaTri (ví dụ giới hạn tối đa là 99999999999999.99)
        $maxTongGiaTri = 99999999999999.99;  // Giới hạn giá trị tối đa
        $nvkTongGiaTri = min($request->nvkTongGiaTri, $maxTongGiaTri);  // Giới hạn giá trị nếu vượt quá

        // Tạo hóa đơn mới
        $hoaDon = new nvk_hoadon_model();
        $hoaDon->nvkMaHoaDon = $request->nvkMaHoaDon;
        $hoaDon->nvkMakhachhang = $request->nvkMakhachhang;
        $hoaDon->nvkNgayHoaDon = $request->nvkNgayHoaDon;
        $hoaDon->nvkHotenKhachHang = $request->nvkHotenKhachHang;
        $hoaDon->nvkEmail = $request->nvkEmail;
        $hoaDon->nvkDienThoai = $request->nvkDienThoai;
        $hoaDon->nvkDiaChi = $request->nvkDiaChi;
        $hoaDon->nvkTongGiaTri = $nvkTongGiaTri;  // Lưu giá trị đã được giới hạn
        $hoaDon->nvkTrangThai = $request->nvkTrangThai;

        // Lưu vào cơ sở dữ liệu
        $hoaDon->save();

        return redirect()->route('nvk.listHD')->with('success', 'Thêm hóa đơn thành công!');
    }
    #chi tiết
            public function ttchitiethd($id)
            {
                // Truy vấn dữ liệu từ bảng nvk_HoaDon theo id
                $nvkHoaDon = nvk_hoadon_model::find($id);

                // Nếu không tìm thấy Hoa Don
                if (!$nvkHoaDon) {
                    return redirect()->route('nvk.listHD')->with('error', 'Không tìm thấy Hoa Don.');
                }

                // Lấy danh sách loại Hoa Don
                $nvkloaikhachhang = nvk_KhachHang_model::all();

                // Trả về view với dữ liệu Hoa Don và loại Hoa Don
                return view('nvkAdmins.nvkHoaDon.nvk-chitiet-HD', compact('nvkHoaDon', 'nvkloaikhachhang'));
            }
    #edit
    public function nvkedithd($id)
    {
        // Truy vấn dữ liệu từ bảng nvk_HoaDon theo id
        $nvkHoaDon = nvk_hoadon_model::find($id);

        // Nếu không tìm thấy Hoa Don
        if (!$nvkHoaDon) {
            return redirect()->route('nvk.listHD')->with('error', 'Không tìm thấy Hoa Don.');
        }

        // Lấy danh sách loại Hoa Don
        $nvkloaikhachhang = nvk_KhachHang_model::all();

        // Trả về view với dữ liệu Hoa Don và loại Hoa Don
        return view('nvkAdmins.nvkHoaDon.nvk-edit-HD', compact('nvkHoaDon', 'nvkloaikhachhang'));
    }
    public function nvkeditHDsubmit(Request $request, $id)
    {
    // Xác thực dữ liệu
    $request->validate([
        'nvkMakhachhang' => 'required|exists:nvk_khachhang,id',
        'nvkMaHoaDon' => "required|string|unique:nvk_hoadon,nvkMaHoaDon,{$id}",
        'nvkNgayHoaDon' => 'required|date',
        'nvkHotenKhachHang' => 'required|string|max:255',
        'nvkEmail' => 'nullable|email|max:255',
        'nvkDienThoai' => 'nullable|string|max:255',
        'nvkDiaChi' => 'nullable|string|max:255',
        'nvkTongGiaTri' => 'required|numeric|min:0',
        'nvkTrangThai' => 'required|boolean',
    ]);

    // Tìm hóa đơn theo ID
    $nvkHoaDon = nvk_hoadon_model::find($id);

    // Kiểm tra nếu không tìm thấy
    if (!$nvkHoaDon) {
        return redirect()->route('nvk.listHD')->with('error', 'Không tìm thấy hóa đơn.');
    }

    // Giới hạn giá trị nvkTongGiaTri
    $maxTongGiaTri = 9999999999.99; // Giới hạn giá trị tối đa
    $nvkTongGiaTri = min($request->nvkTongGiaTri, $maxTongGiaTri);

    // Cập nhật dữ liệu
    $nvkHoaDon->nvkMaHoaDon = $request->nvkMaHoaDon;
    $nvkHoaDon->nvkMakhachhang = $request->nvkMakhachhang;
    $nvkHoaDon->nvkNgayHoaDon = $request->nvkNgayHoaDon;
    $nvkHoaDon->nvkHotenKhachHang = $request->nvkHotenKhachHang;
    $nvkHoaDon->nvkEmail = $request->nvkEmail;
    $nvkHoaDon->nvkDienThoai = $request->nvkDienThoai;
    $nvkHoaDon->nvkDiaChi = $request->nvkDiaChi;
    $nvkHoaDon->nvkTongGiaTri = $nvkTongGiaTri; // Gán giá trị đã được giới hạn
    $nvkHoaDon->nvkTrangThai = $request->nvkTrangThai;

    // Lưu vào cơ sở dữ liệu
    $nvkHoaDon->save();

    return redirect()->route('nvk.listHD')->with('success', 'Cập nhật hóa đơn thành công!');
    }
     #delete
     public function nvkHDdelete($id){
        $nvkHoaDon = nvk_hoadon_model::findOrFail($id);
        $nvkHoaDon->delete();
        return redirect()->route('nvk.listHD')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }


}
