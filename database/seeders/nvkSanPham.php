<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nvkSanPhams extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'VP01',
            'nvknvkTenSanPham'=>'Cay phu quy',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>699000,
            'nvknvkMaloai'=> 1,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'VP02',
            'nvknvkTenSanPham'=>'Cay dai phu quy',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>199000,
            'nvknvkMaloai'=> 1,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'VP03',
            'nvknvkTenSanPham'=>'Cay Hanh Phuc',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>899000,
            'nvknvkMaloai'=> 1,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'VP04',
            'nvknvkTenSanPham'=>'Cay van loc',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>799000,
            'nvknvkMaloai'=> 1,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'PT001',
            'nvknvkTenSanPham'=>'Cay van loc',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>150000,
            'nvknvkMaloai'=> 1,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'PT002',
            'nvknvkTenSanPham'=>'Cay truong sinh',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>100000,
            'nvknvkMaloai'=> 3,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'PT003',
            'nvknvkTenSanPham'=>'Cay hanh phuc',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>200000,
            'nvknvkMaloai'=> 3,
            'nvknvkTrangThai'=> 0
        ]);
        DB::table("nvknvk_sanpham")->insert([
            'nvknvkMaSanPham'=>'PT004',
            'nvknvkTenSanPham'=>'Cay hoa nhai',
            'nvknvkHinhAnh'=>'',
            'nvknvkSoLuong'=> 100,
            'nvknvkDonGia'=>100000,
            'nvknvkMaloai'=> 3,
            'nvknvkTrangThai'=> 0
        ]);
    }
}
