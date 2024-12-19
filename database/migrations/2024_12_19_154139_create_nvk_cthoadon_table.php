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
        Schema::create('nvk_cthoadon', function (Blueprint $table) {
            $table->id();
            $table->integer('nvkHoaDonID')->reference('id')->on('nvk__hoa_don');
            $table->integer('nvkSanPhamID')->reference('id')->on('nvk__san_pham');
            $table->integer('nvkSoLuongMua');
            $table->float('nvkDonGiaMua');
            $table->float('nvkThanhTien');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_cthoadon');
    }
};
