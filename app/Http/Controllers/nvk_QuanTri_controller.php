<?php

namespace App\Http\Controllers;
use App\Models\nvk_quantri;
use Illuminate\Http\Request;

class nvk_QuanTri_controller extends Controller
{
    public function nvkLogin(){
        return view('nvklogin.nvk_login');
    }
    public function nvkLoginsubmit(Request $request) {
        // Validation form
        $validationData = $request->validate([
            'nvkTaiKhoan' => 'required|string',
            'nvkMatKhau' => 'required|min:6|max:12'
        ]);
        // Lấy giá trị từ form
        $email = $request->input('nvkTaiKhoan');
        $password = $request->input('nvkMatKhau');
        // Kiểm tra tài khoản
        $user = nvk_quantri::where('nvkTaiKhoan', $email)->first();
        if (!$user) {
            return back()->withErrors(['nvkTaiKhoan' => 'Tài khoản không tồn tại.']);
        }
        // Kiểm tra mật khẩu (nếu chưa mã hóa)
        if ($user->nvkMatKhau !== $password) {
            return back()->withErrors(['nvkMatKhau' => 'Mật khẩu không đúng.']);
        }
        // Đăng nhập thành công, chuyển hướng
        return redirect('/home');
    }
    public function nvklogout()
    {
        $messages_count = 3; // Số tin nhắn
        $notifications_count = 15; // Số thông báo
        return view('nvklogin.nvkhome-logout', [
            'messages_count' => $messages_count,
            'notifications_count' => $notifications_count
        ]);
    }
    public function nvklistQT()
    {
        $nvkquantri = nvk_quantri::all();
        return view('nvklogin.nvk-listQT',['nvkquantri' => $nvkquantri]);
    }
       //them mowi
       public function nvkcreatQT(){
        return view('nvklogin.nvkquantri.nvk-createqt');
    }
    public function nvkcreatQTsubmit(Request $request){
        $request->validate([
            'id' => 'required|unique:nvk_quantri,id', // Đảm bảo duy nhất
            'nvkTaiKhoan' => 'required|unique:nvk_quantri,nvkTaiKhoan', // Đảm bảo duy nhất
            'nvkMatKhau' => 'required',
            'nvkTrangThai' => 'required|boolean',
        ]);

        $nvkquantri = new nvk_quantri;
        $nvkquantri->id = $request->id;
        $nvkquantri->nvkTaiKhoan = $request->nvkTaiKhoan;
        $nvkquantri->nvkMatKhau = $request->nvkMatKhau;
        $nvkquantri->nvkTrangThai = $request->nvkTrangThai;

        $nvkquantri->save();

        return redirect()->route('nvk-admins-listQT');
    }
    public function nvkchitietqt($id)
    {
        // Tìm bản ghi theo id
        $nvkquantri = nvk_quantri::find($id);

        // Kiểm tra nếu không tìm thấy bản ghi
        if (!$nvkquantri) {
            return redirect('nvk-admins-listQT')->with('error', 'Không tìm thấy thông tin sản phẩm.');
        }

        // Trả về view với dữ liệu
        return view('nvklogin.nvkquantri.nvk-chitietqt', ['nvkquantri' => $nvkquantri]);
    }

}
