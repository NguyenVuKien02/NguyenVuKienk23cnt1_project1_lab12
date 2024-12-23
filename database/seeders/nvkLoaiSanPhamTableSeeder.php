<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class nvkLoaiSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvk_loaisanpham')->insert([
            'nvkMaloai'=>'L001',
            'nvkTenLoai'=>'Cây Văn phong',
            'nvkTrangThai' => 0
        ]);
    }
}
