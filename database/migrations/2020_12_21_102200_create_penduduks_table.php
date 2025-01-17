<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kartu_keluarga_id')->constrained('kartu_keluargas');
            $table->string ('nama');
            $table->string ('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->foreignId('level_pendidikan_id')->constrained('level_pendidikans');
            $table->foreignId('pekerjaan_id')->constrained('pekerjaans');
            $table->string('status_pernikahan');
            $table->string('status_keluarga');
            $table->foreignId('kewarganegaraan_id')->constrained('kewarganegaraans');
            $table->string('ayah');
            $table->string('ibu');
            
            
            
          

            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
}
