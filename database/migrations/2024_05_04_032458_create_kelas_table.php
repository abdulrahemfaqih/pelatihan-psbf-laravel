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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('nama_kelas', 100)->nullable();
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'\'at', 'Sabtu']);


            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->string('dosen_id', 18)->nullable();
            $table->unsignedBigInteger('matakuliah_id')->nullable();

            // $table->foreignId('dosen_id')->references('nip')->on('dosen');
            // $table->foreignId('matakuliah_id')->references('id_mk')->on('matakuliah');


            // foreign key
            $table->foreign('dosen_id')->references('nip')->on('dosen')->contrained();
            $table->foreign('matakuliah_id')->references('id_mk')->on('matakuliah')->contrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
