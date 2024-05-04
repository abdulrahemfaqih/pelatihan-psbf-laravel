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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 12)->primary();
            $table->string('nama_mahasiswa', 200);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date("tanggal_lahir");
            $table->string('tempat_lahir', 100);
            $table->string('alamat', 255);
            $table->string('no_hp', 12);
            $table->string('email', 100)->unique();
            $table->string('foto', 255)->nullable();
            $table->string('password', 255);
            $table->unsignedTinyInteger('tahun_angkatan');
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
