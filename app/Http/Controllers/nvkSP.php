<?php

namespace App\Http\Controllers;
use App\Models\nvk_loai_san_pham;
use App\Models\nvk_QuanTri;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class nvkSP extends Controller
{
    //
    public function nvklist(){
        $nvkloaisanpham = nvk_loai_san_pham::all();
        return view('nvkAdmins.nvkLoaiSanPham.nvk-list',['nvkloaisanpham'=> $nvkloaisanpham]);
    }
    //them mowi
    public function nvkcreat(){
        return view('nvkAdmins.nvkLoaiSanPham.nvk-create');
    }
    public function nvkcreatsubmit(Request $request){
        $request->validate([
            'nvkMaloai' => 'required|unique:nvk_loaisanpham,nvkMaloai', // Đảm bảo duy nhất
            'nvkTenLoai' => 'required',
            'nvkTrangThai' => 'required|boolean',
        ]);

        $nvkloaisanpham = new nvk_loai_san_pham;
        $nvkloaisanpham->nvkMaloai = $request->nvkMaloai;
        $nvkloaisanpham->nvkTenLoai = $request->nvkTenLoai;
        $nvkloaisanpham->nvkTrangThai = $request->nvkTrangThai;

        $nvkloaisanpham->save();

        return redirect()->route('admin-nvk.list');
    }
        #chi tiết
        public function nvkchitiet($id)
        {
            // Tìm bản ghi theo id
            $nvkloaisanpham = nvk_loai_san_pham::find($id);

            // Kiểm tra nếu không tìm thấy bản ghi
            if (!$nvkloaisanpham) {
                return redirect('/nvkAdmins/nvk-loai-san-pham')->with('error', 'Không tìm thấy thông tin sản phẩm.');
            }

            // Trả về view với dữ liệu
            return view('nvkAdmins.nvkLoaiSanPham.nvk-chitiet', ['nvkloaisanpham' => $nvkloaisanpham]);
        }

    #edit
    public function nvkedit($id){
        $nvkloaisanpham = nvk_loai_san_pham::find($id);

        // Kiểm tra xem có tìm thấy dữ liệu không
        if (!$nvkloaisanpham) {
            return redirect('/nvkAdmins/nvk-loai-san-pham')->with('error', 'Loại sản phẩm không tồn tại');
        }

        return view('nvkAdmins.nvkLoaiSanPham.nvk-edit', ['nvkloaisanpham' => $nvkloaisanpham]);
    }


    # edit submit
    public function nvkeditsubmit(Request $request)
    {
        $nvkMaloai  = $request->nvkMaloai ;
        $nvkloaisanpham = nvk_loai_san_pham::where('nvkMaloai',$nvkMaloai)->first();
        $nvkloaisanpham->nvkMaloai=$request->nvkMaloai;
        $nvkloaisanpham->nvkTenLoai=$request->nvkTenLoai;
        $nvkloaisanpham->nvkTrangThai=$request->nvkTrangThai;
        // ...
        $nvkloaisanpham->save(); // Ghi lại
        return redirect('/nvkAdmins/nvk-loai-san-pham');
    }
    #delete
        public function nvkdelete($id)
        {
            nvk_loai_san_pham::where('nvkMaloai',$id)->delete();
            return redirect('/nvkAdmins/nvk-loai-san-pham');
        }
    #Trang chủ tạm thời
    public function nvktrangchu(){
        // Lấy tất cả loại sản phẩm từ bảng
        $nvkloaisanpham = nvk_loai_san_pham::all();
        $nvkquantri = nvk_QuanTri::all();

        // Truyền dữ liệu vào view
        return view('nvkAdmins.nvkLoaiSanPham.nvk-trangchu', ['nvkloaisanpham' => $nvkloaisanpham, 'nvkquantri'=>$nvkquantri]);
    }
    # databoard liên kết tới trang chủ
    public function datataboard(Request $request)
    {
        if ($request->session()->has('admin.id')) {
            // Lấy số lượng loại sản phẩm
            $nvkloaisanpham = nvk_loai_san_pham::count();

            // Lấy số lượng admin
            $nvkquantri = nvk_quantri::count();

            // Ghi log thông tin
            Log::info('Số lượng loại sản phẩm:', ['count' => $nvkloaisanpham]);
            Log::info('Số lượng admin:', ['count' => $nvkquantri]);
            // Trả về view với dữ liệu
            return view('nvkAdmins.nvkLoaiSanPham.nvk-trangchu', [
                'nvkloaisanpham' => $nvkloaisanpham,
                'nvkquantri' => $nvkquantri,
            ]);
        } else {
            // Nếu không có session admin thì redirect về trang login
            return redirect('/nvkAdmins/nvk-loai-san-pham');
        }
    }
}
