<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvkQuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nvkMatKhau = md5("02102005");

            DB::table('nvk_quantri')->insert([
                'nvkTaiKhoan' => "nguyenvukien02@gmail.com",
                'nvkMatKhau' => $nvkMatKhau,
                'nvkTrangThai' => 0
            ]);
    }
}
