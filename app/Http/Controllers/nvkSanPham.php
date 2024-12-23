<?php

namespace App\Http\Controllers;
use App\Models\nvk_san_pham;

use Illuminate\Http\Request;

class nvkSanPham extends Controller
{
    //
    public function nvklist(){
        $nvksanpham = nvk_san_pham::all();
        return view('nvkAdmins.nvkSanPham.nvk-listsp',['nvksanpham'=> $nvksanpham]);
    }
    //them mowi
    public function nvkcreat(){
        return view('nvkAdmins.nvkSanPham.nvk-create');
    }
    public function nvkcreatsubmit(Request $request){
        $request->validate([
            'nvkMaloai' => 'required|unique:nvk_sanpham,nvkMaloai', // Đảm bảo duy nhất
            'nvkTenLoai' => 'required',
            'nvkTrangThai' => 'required|boolean',
        ]);

        $nvksanpham = new nvk_san_pham;
        $nvksanpham->nvkMaloai = $request->nvkMaloai;
        $nvksanpham->nvkTenLoai = $request->nvkTenLoai;
        $nvksanpham->nvkTrangThai = $request->nvkTrangThai;

        $nvksanpham->save();

        return redirect()->route('admin-nvk.list');
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
            return view('nvkAdmins.nvkSanPham.nvk-chitiet', ['nvksanpham' => $nvksanpham]);
        }

    #edit
    public function nvkedit($id){
        $nvksanpham = nvk_san_pham::find($id);

        // Kiểm tra xem có tìm thấy dữ liệu không
        if (!$nvksanpham) {
            return redirect('/nvkAdmins/nvk-san-pham')->with('error', 'Loại sản phẩm không tồn tại');
        }

        return view('nvkAdmins.nvkSanPham.nvk-edit', ['nvksanpham' => $nvksanpham]);
    }


    # edit submit
    public function nvkeditsubmit(Request $request)
    {
        $nvkMaloai  = $request->nvkMaloai ;
        $nvksanpham = nvk_san_pham::where('nvkMaloai',$nvkMaloai)->first();
        $nvksanpham->nvkMaloai=$request->nvkMaloai;
        $nvksanpham->nvkTenLoai=$request->nvkTenLoai;
        $nvksanpham->nvkTrangThai=$request->nvkTrangThai;
        // ...
        $nvksanpham->save(); // Ghi lại
        return redirect('/nvkAdmins/nvk-san-pham');
    }
    #delete
        public function nvkdelete($id)
        {
            nvk_san_pham::where('nvkMaloai',$id)->delete();
            return redirect('/nvkAdmins/nvk-san-pham');
        }
}
