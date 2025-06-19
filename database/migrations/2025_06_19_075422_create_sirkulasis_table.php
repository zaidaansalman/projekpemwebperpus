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
        Schema::create('sirkulasis', function (Blueprint $table) {
            $table->id();
            $table->unsighnedBigInteger('anggota_id');
            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
            $table->unsighnedBigInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('books')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('status', ['Dipinjam', 'Dikembalikan'])->default('Dipinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sirkulasis');
    }
};
