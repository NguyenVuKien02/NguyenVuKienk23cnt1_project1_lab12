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
        Schema::create('nvk_QuanTri', function (Blueprint $table) {
            $table->string('nvkID');
            $table->string('nvkTaiKhoan',255)->unique();
            $table->string('nvkMatKhau',255);
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_QuanTri');
    }
};
