<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvk_hoadon', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaHoaDon',255)->unique();
            $table->bigInteger('nvkMakhachhang')->references('id')->on('nvk__khach__hang');
            $table->date('nvkNgayHoaDon');
            $table->string('nvkHotenKhachHang',255);
            $table->string('nvkEmail',255);
            $table->string('nvkDienThoai',255);
            $table->string('nvkDiaChi',255);
            $table->float('nvkTongGiaTri');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_hoadon');
    }
};
