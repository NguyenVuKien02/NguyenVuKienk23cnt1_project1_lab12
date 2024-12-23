<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nvkSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'VP01',
            'nvkTenSanPham'=>'Cay phu quy',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>699000,
            'nvkMaloai'=> 1,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'VP02',
            'nvkTenSanPham'=>'Cay dai phu quy',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>199000,
            'nvkMaloai'=> 1,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'VP03',
            'nvkTenSanPham'=>'Cay Hanh Phuc',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>899000,
            'nvkMaloai'=> 1,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'VP04',
            'nvkTenSanPham'=>'Cay van loc',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>799000,
            'nvkMaloai'=> 1,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'PT001',
            'nvkTenSanPham'=>'Cay van loc',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>150000,
            'nvkMaloai'=> 1,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'PT002',
            'nvkTenSanPham'=>'Cay truong sinh',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>100000,
            'nvkMaloai'=> 3,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'PT003',
            'nvkTenSanPham'=>'Cay hanh phuc',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>200000,
            'nvkMaloai'=> 3,
            'nvkTrangThai'=> 0
        ]);
        DB::table("nvk_sanpham")->insert([
            'nvkMaSanPham'=>'PT004',
            'nvkTenSanPham'=>'Cay hoa nhai',
            'nvkHinhAnh'=>'',
            'nvkSoLuong'=> 100,
            'nvkDonGia'=>100000,
            'nvkMaloai'=> 3,
            'nvkTrangThai'=> 0
        ]);
    }
}
