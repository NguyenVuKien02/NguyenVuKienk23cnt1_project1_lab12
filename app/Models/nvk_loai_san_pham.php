<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_loai_san_pham extends Model
{
    use HasFactory;

    protected $table ='nvk_loaisanpham';

    protected $fillable = ['nvkTaiKhoan', 'nvkMatKhau', 'nvkTrangThai']; // Khai báo các cột có thể thao tác

}
