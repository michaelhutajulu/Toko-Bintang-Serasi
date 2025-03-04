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
        Schema::create('berita', function (Blueprint $table) {
            $table->increments('berita_id'); // Primary key
            $table->string('image', 200); // Column image
            $table->longText('informasi_berita'); // Column informasi_berita
            $table->longText('informasi_alumni'); // Column informasi_alumni
            $table->timestamps(); // Created and updated timestamps
            $table->engine = 'InnoDB'; // Storage engine
            $table->charset = 'utf8mb4'; // Character set
            $table->collation = 'utf8mb4_general_ci'; // Collation
        });

        Schema::create('fasilitas', function (Blueprint $table) {
            $table->increments('fasilitas_id');
            $table->string('fasilitas_image', 200);
            $table->string('nama');
            $table->longText('deskripsi');
            $table->timestamps();
        });

        Schema::create('datasekolah', function (Blueprint $table) {
            $table->increments('datasekolah_id');
            $table->longText('visi');
            $table->longText('misi');
            $table->timestamps();
        });

        Schema::create('dataalumni', function (Blueprint $table) {
            $table->increments('dataalumni_id');
            $table->string('nama');
            $table->string('tahun');
            $table->timestamps();
        });

        Schema::create('beranda', function (Blueprint $table) {
            $table->increments('beranda_id');
            $table->string('namaketua');
            $table->longText('ketua');
            $table->string('ketua_image', 200);
            $table->string('namakepala');
            $table->longText('kepala');
            $table->string('kepala_image', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('datasekolah');
        Schema::dropIfExists('dataalumni');
        Schema::dropIfExists('beranda');
    }
};
