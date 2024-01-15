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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama');
            $table->string('nisn');
            $table->string('tanggal_lahir');
            $table->string('alamat_lengkap');
            $table->string('nama_orangtua');
            $table->string('asal_sekolah');
            $table->string('nilai_raport');
            $table->string('file_raport');
            $table->string('status')->default('diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
