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
        Schema::create('nvk_sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaSanPham', 255)->unique();
            $table->string('nvkTenSanPham', 255);
            $table->string('nvkHinhAnh', 255)->nullable();
            $table->integer('nvkSoLuong');
            $table->float('nvkDonGia', 10, 2); // 10 số, 2 chữ số thập phân
            $table->biginteger('nvkMaloai')->references('id')->on('nvk_loaisanpham');
            $table->tinyinteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_sanpham');
    }
};
