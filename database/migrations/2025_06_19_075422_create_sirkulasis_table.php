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
            $table->unsignedBigInteger('anggota_id');
            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('books')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->dateTime('jatuh_tempo')->after('tgl_pinjam');
            $table->date('tgl_kembali')->default('2000-01-01')->change();
            $table->enum('status', ['Dipinjam', 'Dikembalikan'])->default('Dipinjam');
            $table->timestamps();
            $table->string('denda');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sirkulasis');
        Schema::table('sirkulasis', function (Blueprint $table) {
        $table->date('tgl_kembali')->nullable(false)->change();
        $table->dropColumn('jatuh_tempo');
        });
    }
};
