<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_hoadon_model extends Model
{
    use HasFactory;
    protected $table ="nvk_hoadon";

    // Đảm bảo không sử dụng timestamps nếu bạn không có cột created_at và updated_at
    public $timestamps = false;
     // Các cột có thể được gán giá trị đại diện cho các trường trong bảng
   protected $fillable = [
    'nvkMaHoaDon',
    'nvkMakhachhang',
    'nvkNgayHoaDon',
    'nvkHotenKhachHang',
    'nvkEmail',
    'nvkDienThoai',
    'nvkDiaChi',
    'nvkTongGiaTri',
    'nvkTrangThai',
];
}
