<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->unsignedBigInteger('kategori_id')->index();
            $table->string('barang_kode', 20)->unique();
            $table->string('barang_nama', 100);
            $table->integer('harga');
            $table->timestamps();

            // Foreign key ke tabel m_kategori
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
