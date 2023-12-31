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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('ttl');
            $table->text('tempat');
            $table->text('alamat');
            $table->string('no_hp',13);
            $table->string('email');
            $table->text('foto');
            $table->text('dokumen');
            $table->date('ttl_p');
            // $table->primary('id_pengajuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
