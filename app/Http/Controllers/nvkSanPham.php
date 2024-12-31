<?php

namespace App\Http\Controllers;

use App\Models\nvk_loai_san_pham;
use App\Models\nvk_san_pham;
use Illuminate\Support\Facades\File; // Xử lý file
use Illuminate\Http\Request;


class nvkSanPham extends Controller
{
    //
    public function nvklist(){
        $nvksanpham = nvk_san_pham::all();
        return view('nvkAdmins.nvkSanPham.nvk-listsp',['nvksanpham'=> $nvksanpham]);
    }
     // Form thêm mới sản phẩm
     public function nvkcreatsp()
     {
         $nvkloaisanpham = nvk_loai_san_pham::all();
         $availableImages = File::allFiles(public_path('images'));
         return view('nvkAdmins.nvkSanPham.nvk-createsp', ['nvkloaisanpham' => $nvkloaisanpham, 'availableImages' => $availableImages]);
     }
      // Xử lý thêm mới sản phẩm
    public function nvkcreatsubmitsp(Request $request)
    {
        $request->validate([
            'nvkMaSanPham' => 'required|string|unique:nvk_sanpham',
            'nvkTenSanPham' => 'required|string',
            'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nvkSoLuong' => 'required|numeric',
            'nvkDonGia' => 'required|numeric',
            'nvkMaloai' => 'required',
            'nvkTrangThai' => 'required|boolean',
        ]);
        // Tìm ID loại sản phẩm từ mã loại
        $loaiSanPham = nvk_loai_san_pham::where('nvkMaloai', $request->nvkMaloai)->first();
        if (!$loaiSanPham) {
            return redirect()->back()->withErrors(['nvkMaloai' => 'Mã loại sản phẩm không hợp lệ.']);
        }

        $nvksanpham = new nvk_san_pham();
        $nvksanpham->nvkMaSanPham = $request->nvkMaSanPham;
        $nvksanpham->nvkTenSanPham = $request->nvkTenSanPham;

        // Xử lý hình ảnh
        if ($request->hasFile('nvkHinhAnh')) {
            $nvkGetAnh = $request->file('nvkHinhAnh');
            $SaveAs = time() . '.' . $nvkGetAnh->getClientOriginalExtension(); // Tạo tên file duy nhất
            $nvkGetAnh->move(public_path('images'), $SaveAs); // Lưu hình ảnh vào thư mục public/images
            $nvksanpham->nvkHinhAnh = $SaveAs; // Lưu tên file vào cơ sở dữ liệu
        } elseif ($request->nvkHinhAnhSelected) {
            $nvksanpham->nvkHinhAnh = $request->nvkHinhAnhSelected; // Sử dụng ảnh đã chọn từ danh sách
        }

        $nvksanpham->nvkSoLuong = $request->nvkSoLuong;
        $nvksanpham->nvkDonGia = $request->nvkDonGia;
        $nvksanpham->nvkMaloai = $loaiSanPham->id; // Lưu ID của loại sản phẩm
        $nvksanpham->nvkTrangThai = $request->nvkTrangThai;
        $nvksanpham->save();

        return redirect()->route('admin-nvk.listsp')->with('success', 'Thêm sản phẩm thành công!');
    }

        #chi tiết
        public function nvkchitiet($id)
        {
            // Tìm bản ghi theo id
            $nvksanpham = nvk_san_pham::find($id);

            // Kiểm tra nếu không tìm thấy bản ghi
            if (!$nvksanpham) {
                return redirect('/nvkAdmins/nvk-san-pham')->with('error', 'Không tìm thấy thông tin sản phẩm.');
            }

            // Trả về view với dữ liệu
            return view('nvkAdmins.nvkSanPham.nvk-chitietsp', ['nvksanpham' => $nvksanpham]);
        }

    #edit
    public function nvkeditsp($nvkID)
        {
            // Truy vấn dữ liệu từ bảng nvk_sanpham theo id
            $nvksanpham = nvk_san_pham::find($nvkID);

            // Nếu không tìm thấy sản phẩm
            if (!$nvksanpham) {
                return redirect()->route('nvklist.sanpham')->with('error', 'Không tìm thấy sản phẩm.');
            }

            // Lấy danh sách loại sản phẩm
            $nvkloaisanpham = nvk_loai_san_pham::all();
            $availableImages = File::allFiles(public_path('images'));
            // Trả về view với dữ liệu sản phẩm và loại sản phẩm
            return view('nvkAdmins.nvkSanPham.nvk-editsp', ['nvksanpham' => $nvksanpham, 'nvkloaisanpham' => $nvkloaisanpham, 'availableImages' => $availableImages]);
        }

    public function nvkeditsubmitsp(Request $request, $nvkID)
        {
            $request->validate([
                'nvkTenSanPham' => 'required|string',
                'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'nvkSoLuong' => 'required|numeric',
                'nvkDonGia' => 'required|numeric',
                'nvkMaloai' => 'required',
                'nvkTrangThai' => 'required|boolean',
            ]);

            // Lấy sản phẩm cần sửa
            $nvksanpham = nvk_san_pham::find($nvkID);
            if (!$nvksanpham) {
                return redirect()->route('nvklist.sanpham')->with('error', 'Không tìm thấy sản phẩm.');
            }

            // Xử lý mã loại sản phẩm
            $loaiSanPham = nvk_loai_san_pham::where('nvkMaloai', $request->nvkMaloai)->first();
            if (!$loaiSanPham) {
                return redirect()->back()->withErrors(['nvkMaloai' => 'Mã loại sản phẩm không hợp lệ.']);
            }

            // Cập nhật thông tin sản phẩm
            $nvksanpham->nvkTenSanPham = $request->nvkTenSanPham;

            // Xử lý hình ảnh
            if ($request->hasFile('nvkHinhAnh')) {
                // Nếu sản phẩm đã có ảnh cũ, xóa ảnh cũ
                if ($nvksanpham->nvkHinhAnh && File::exists(public_path('images/' . $nvksanpham->nvkHinhAnh))) {
                    File::delete(public_path('images/' . $nvksanpham->nvkHinhAnh));
                }

                // Lưu ảnh mới
                $nvkGetAnh = $request->file('nvkHinhAnh');
                $SaveAs = time() . '.' . $nvkGetAnh->getClientOriginalExtension();
                $nvkGetAnh->move(public_path('images'), $SaveAs);
                $nvksanpham->nvkHinhAnh = $SaveAs; // Lưu tên file ảnh mới
            }
            elseif ($request->nvkHinhAnhSelected) {
                $nvksanpham->nvkHinhAnh = $request->nvkHinhAnhSelected; // Sử dụng ảnh đã chọn từ danh sách
            }
            // Nếu không tải lên hình mới và chưa có hình, để trống
            if (!$nvksanpham->nvkHinhAnh) {
                $nvksanpham->nvkHinhAnh = null;
            }

            // Cập nhật các thông tin khác
            $nvksanpham->nvkSoLuong = $request->nvkSoLuong;
            $nvksanpham->nvkDonGia = $request->nvkDonGia;
            $nvksanpham->nvkMaloai = $loaiSanPham->id;
            $nvksanpham->nvkTrangThai = $request->nvkTrangThai;

            // Lưu thay đổi
            $nvksanpham->save();

            return redirect('/nvkAdmins/nvk-san-pham')->with('success', 'Cập nhật sản phẩm thành công!');
        }
    #delete
        public function nvkdelete($id)
        {
            nvk_san_pham::where('nvkMaSanPham',$id)->delete();
            return redirect('/nvkAdmins/nvk-san-pham');
        }
}
