<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nodaftar', 12)->unique();

            $table->string('prodi', 50);
            $table->string('kelas', 50);

            $table->string('nisn', 20);
            $table->string('nik', 20);
            $table->string('nama', 50);
            $table->string('tempatlahir', 50);
            $table->string('tanggallahir', 50);
            $table->string('kelamin', 10);
            $table->string('hobi', 50);
            $table->string('cita', 50);
            $table->string('anakke', 5);
            $table->string('saudara', 5);
            $table->string('berat', 5);
            $table->string('tinggi', 5);
            $table->string('alamat', 150);
            $table->string('rt', 5);
            $table->string('rw', 5);            
            $table->string('desa', 50);
            $table->string('kecamatan', 50);
            $table->string('kabupaten', 50);
            $table->string('provinsi', 50);
            $table->string('kodepos', 8);      
            $table->string('telephone', 15);
            $table->string('sekolah', 50);
            $table->string('jurusan', 50);
            $table->string('skhun', 50);
            $table->string('tahunlulus', 8);            

            $table->string('ayah', 50);
            $table->string('pekerjaanayah', 50);
            $table->string('pendidikanayah', 50);
            $table->string('ibu', 50);
            $table->string('pekerjaanibu', 50);
            $table->string('pendidikanibu', 50);          
            $table->string('penghasilan', 15);

            $table->string('lomba', 50);
            $table->string('tingkat', 50);
            $table->string('peringkat', 50);
            $table->string('tahunlomba', 8);
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
