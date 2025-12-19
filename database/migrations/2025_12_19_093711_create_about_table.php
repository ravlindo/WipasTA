<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_besar');   // path / nama file gambar besar
            $table->string('gambar_kanan');  // path / nama file gambar kanan
            $table->string('title');  // judul about
            $table->text('deskripsi');        // deskripsi about
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
