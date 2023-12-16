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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bidang_usaha',50);
            $table->string('persyaratan',50);
            $table->string('lowongan',50);
            $table->date('ttl_p');
            $table->date('ttl_tp');
            $table->text('deskripsi');
            $table->text('foto');
            $table->text('lokasi');
            // $table->primary('id_posting');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
