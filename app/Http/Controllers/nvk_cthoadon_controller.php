<?php

namespace App\Http\Controllers;
use App\Models\nvk_chitiehoadon;
use App\Models\nvk_hoadon_model;
use App\Models\nvk_san_pham;
use Illuminate\Http\Request;

class nvk_cthoadon_controller extends Controller
{
    public function nvklistCTHD()
    { //paginate(5)
        $nvkctHoaDon = nvk_chitiehoadon::all();
        return view('nvkAdmins.nvkCTHOADON.nvk-listCTHD', ['nvkctHoaDon' => $nvkctHoaDon]);
    }
    #insert
    public function nvkcreatecthd()
    {
        // Lấy danh sách Hoa Don va San Pham để chọn
        $nvkHoaDon = nvk_hoadon_model::all();
        $nvkSanPham = nvk_san_pham::all();

        return view('nvkAdmins.nvkCTHOADON.nvk-create-CTHD',
         [
            'nvkHoaDon' => $nvkHoaDon,
            'nvkSanPham' => $nvkSanPham
         ]);
    }
    #insert submit
    public function nvkcreatecthdsubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'nvkHoaDonID' => 'required|exists:nvk_hoadon,id',
            'nvkSanPhamID' => 'required|exists:nvk_sanpham,id',
            'nvkSoLuongMua' => 'required',
            'nvkDonGiaMua' => 'required|numeric|min:0|max:9999999999.99',
            'nvkThanhTien' => 'nullable',
            'nvkTrangThai' => 'required|boolean',
        ]);

        // Tạo hóa đơn mới
        $CThoaDon = new nvk_chitiehoadon();
        $CThoaDon->nvkHoaDonID = $request->nvkHoaDonID;
        $CThoaDon->nvkSanPhamID = $request->nvkSanPhamID;
        $CThoaDon->nvkSoLuongMua = $request->nvkSoLuongMua;
        $CThoaDon->nvkDonGiaMua = $request->nvkDonGiaMua;
        $CThoaDon->nvkThanhTien = $request->nvkThanhTien;
        $CThoaDon->nvkTrangThai = $request->nvkTrangThai;

        // Lưu vào cơ sở dữ liệu
        $CThoaDon->save();

        return redirect()->route('nvk.listCTHD')->with('success', 'Thêm hóa đơn thành công!');
    }
    #chi tiết
    public function nvkchitietcthd($id)
    {
        // Truy vấn dữ liệu từ bảng nvk_HoaDon theo id
        $nvkCTHoaDon = nvk_chitiehoadon::find($id);

        // Nếu không tìm thấy Hoa Don
        if (!$nvkCTHoaDon) {
            return redirect()->route('nvk.listCTHD')->with('error', 'Không tìm thấy Hoa Don.');
        }

        // Lấy danh sách loại ID Hoa Don
        $nvkIDHoaDon = nvk_hoadon_model::all();
        // Lấy danh sách loại ID San Pham
        $nvkIDSanPham = nvk_san_pham::all();

        // Trả về view với dữ liệu Hoa Don và loại Hoa Don
        return view('nvkAdmins.nvkCTHOADON.nvk-chitiet-CTHD', compact('nvkCTHoaDon', 'nvkIDHoaDon','nvkIDSanPham'));
    }

    #edit
    public function nvkeditcthd($id)
    {
        // Truy vấn dữ liệu từ bảng nvk_HoaDon theo id
        $nvkCTHoaDon = nvk_chitiehoadon::find($id);

        // Nếu không tìm thấy Hoa Don
        if (!$nvkCTHoaDon) {
            return redirect()->route('nvk.listCTHD')->with('error', 'Không tìm thấy Hoa Don.');
        }

        // Lấy danh sách loại ID Hoa Don
        $nvkIDHoaDon = nvk_hoadon_model::all();
        // Lấy danh sách loại ID San Pham
        $nvkIDSanPham = nvk_san_pham::all();

        // Trả về view với dữ liệu Hoa Don và loại Hoa Don
        return view('nvkAdmins.nvkCTHOADON.nvk-edit-CTHD', compact('nvkCTHoaDon', 'nvkIDHoaDon','nvkIDSanPham'));
    }
    public function nvkeditCTHDsubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'nvkHoaDonID' => 'required|exists:nvk_hoadon,id',
            'nvkSanPhamID' => 'required|exists:nvk_sanpham,id',
            'nvkSoLuongMua' => 'required|integer|min:1',
            'nvkDonGiaMua' => 'required|numeric|min:0|max:9999999999.99',
            'nvkThanhTien' => 'nullable|numeric|min:0|max:9999999999.99',
            'nvkTrangThai' => 'required|boolean',
        ]);

        // Tìm chi tiết hóa đơn theo ID
        $nvkCTHoaDon = nvk_chitiehoadon::find($id);

        // Kiểm tra nếu không tìm thấy
        if (!$nvkCTHoaDon) {
            return redirect()->route('nvk.listCTHD')->with('error', 'Không tìm thấy chi tiết hóa đơn.');
        }

        // Cập nhật dữ liệu
        $nvkCTHoaDon->nvkHoaDonID = $request->nvkHoaDonID;
        $nvkCTHoaDon->nvkSanPhamID = $request->nvkSanPhamID;
        $nvkCTHoaDon->nvkSoLuongMua = $request->nvkSoLuongMua;
        $nvkCTHoaDon->nvkDonGiaMua = $request->nvkDonGiaMua;
        $nvkCTHoaDon->nvkThanhTien = $request->nvkThanhTien ?? $nvkCTHoaDon->nvkSoLuongMua * $nvkCTHoaDon->nvkDonGiaMua;
        $nvkCTHoaDon->nvkTrangThai = $request->nvkTrangThai;

        // Lưu vào cơ sở dữ liệu
        $nvkCTHoaDon->save();

        return redirect()->route('nvk.listCTHD')->with('success', 'Cập nhật chi tiết hóa đơn thành công!');
    }
     #delete
     public function nvkCTHDdelete($id){
        $nvkCTHoaDon = nvk_chitiehoadon::findOrFail($id);
        $nvkCTHoaDon->delete();
        return redirect()->route('nvk.listCTHD')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
}
