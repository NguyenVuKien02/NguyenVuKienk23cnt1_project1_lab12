<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvk_QuanTri_controller extends Controller
{
    public function nvkLogin(){
        return view('nvklogin.nvk_login');
    }
     public function nvkLoginsubmit(){
        return view('nvklogin.nvk_login_submit');
    }

}
