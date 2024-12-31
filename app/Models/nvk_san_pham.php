<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_san_pham extends Model
{
    use HasFactory;

    protected $table ='nvk_sanpham';
     // Các cột có thể được gán giá trị đại diện cho các trường trong bảng
   protected $fillable = [
    'nvkMaSanPham',
    'nvkTenSanPham',
    'nvkHinhAnh',
    'nvkSoLuong',
    'nvkDonGia',
    'nvkMaloai',
    'nvkTrangThai',
];

// Đảm bảo không sử dụng timestamps nếu bạn không có cột created_at và updated_at
public $timestamps = false;

}
