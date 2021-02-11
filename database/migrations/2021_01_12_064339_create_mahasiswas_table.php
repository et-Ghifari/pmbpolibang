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
            $table->string('no_daftar', 12)->unique();

            $table->string('prodi', 50);
            $table->string('kelas', 50);

            $table->biginteger('nisn');
            $table->biginteger('nik');
            $table->string('nama', 50);
            $table->string('tempatlhr', 50);
            $table->string('tanggallhr', 50);
            $table->string('jenisk', 10);
            $table->string('hobi', 50);
            $table->string('cita', 50);
            $table->biginteger('anakke');
            $table->biginteger('saudara');
            $table->biginteger('berat');
            $table->biginteger('tinggi');
            $table->string('alamat', 150);
            $table->biginteger('rt');
            $table->biginteger('rw');
            $table->biginteger('kodepos');
            $table->string('desa', 50);
            $table->string('kec', 50);
            $table->string('kab', 50);
            $table->string('prov', 50);      
            $table->biginteger('nohp');
            $table->string('asal', 50);
            $table->string('jurusan', 50);
            $table->string('skhun', 50);
            $table->biginteger('tahun');            

            $table->string('ayah', 50);
            $table->string('akerja', 50);
            $table->string('asekolah', 50);
            $table->string('ibu', 50);
            $table->string('ikerja', 50);
            $table->string('isekolah', 50);          
            $table->biginteger('gaji');

            $table->string('lomba', 50);
            $table->string('tingkat', 50);
            $table->string('peringkat', 50);
            $table->biginteger('tahunl');

            $table->string('org', 50);
            $table->string('keadaan', 50);
                        
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
