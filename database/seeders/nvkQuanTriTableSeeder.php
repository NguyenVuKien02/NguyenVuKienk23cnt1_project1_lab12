<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class nvkQuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nvkMatKhau = Hash::make('02102005');

            DB::table('nvk_quan_tri')->insert([
                'nvkTaiKhoan' => 'nguyenvukien02@gmail.com',
                'nvkMatKhau' => $nvkMatKhau,
                'nvkTrangThai' => 0
            ]);
    }
}
