@extends('home')

@section('content') 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>FORMULIR PENDAFTARAN</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <php
                        $th=date('Y');
                        ?>
                        <div class="header">
                            <center>
                            <h2>
                                Pendaftaran Politeknik Balekambang <span> <?php echo date('Y'); ?></span>
                            </h2>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </center>
                        </div>
                        <form>
                        <div class="body">

                        <h2 class="card-inside-title col-blue">PILIH PROGAM STUDI</h2>
                            <div class="">

                                <div class="col-sm-12">
                                    <div class="form-line">
                                    <h5>Progam Studi</h5>                                        
                                        <select class="form-control show-tick" name="prodi">
                                            <option value="">-- Pilih Jurusan --</option>
                                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                                            <option value="ABI">Akutansi Bisnis Internasional</option>
                                            <option value="AKP">Akutansi Keuangan Publik</option>                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                    <h5>Pilih Kelas</h5>                                        
                                        <select class="form-control show-tick" name="kelas">
                                            <option value="">-- Pilih Kelas --</option>
                                            <option value="Reguler">Reguler</option>
                                            <option value="Karyawan">Karyawan</option>                                            
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <h2 class="card-inside-title">A. Informasi Pribadi Calon Mahasiswa</h2>
                            <div class="">
                                <div class="col-sm-12">                                    
                                    <div class="form-line">
                                        <h5>Nomer Induk Siswa Nasional</h5>
                                        <input type="number" class="form-control" placeholder="nisn..." />
                                    </div>
                                </div>

                                <div class="col-sm-12"> 
                                    <div class="form-line">
                                        <h5>Nomer Induk Kependudukan</h5>
                                        <input type="number" class="form-control" name="nisn" placeholder="nik..." />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Nama Lengkap</h5>
                                        <input type="text" class="form-control" name="nama" placeholder="nama..." />
                                    </div>
                                </div>                                                                       
                                    
                                <div class="col-sm-4">
                                    <div class="form-line">
                                        <h5>Tempat Lahir</h5>
                                        <input type="text" class="form-control" name="tempatlhr" placeholder="tempat..." />
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-line">
                                        <h5>Tanggal Lahir</h5>
                                        <input type="text" class="datepicker form-control" name="tanggallhr" placeholder="tanggal...">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Jenis Kelamin</h5>
                                        <div class="demo-radio-button">
                                            <input name="jenisk" type="radio" id="radio_l" class="with-gap radio-col-cyan" />
                                            <label for="radio_l">Laki - Laki</label>
                                            <input name="jenisk" type="radio" id="radio_p" class="with-gap radio-col-cyan" />
                                            <label for="radio_p">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Hobi</h5>
                                        <input type="text" class="form-control" name="hobi" placeholder="hobi..." />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Cita - Cita</h5>
                                        <input type="text" class="form-control" name="cita" placeholder="cita - cita..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <h5>Anak Ke -</h5>
                                        <input type="number" class="form-control" name="anakke" placeholder="anak ke -..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <h5>Jumlah Saudara</h5>
                                        <input type="number" class="form-control" name="saudara" placeholder="saudara..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <h5>Berat Badan (Kg)</h5>
                                        <input type="number" class="form-control" name="berat" placeholder="berat..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                        <h5>Tinggi Badan (Cm)</h5>
                                        <input type="number" class="form-control" name="tinggi" placeholder="tinggi..." />
                                    </div>
                                </div>                               
                                
                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5>Alamat Lengkap</h5>                                        
                                        <select class="form-control show-tick" name="prov">
                                            <option value="">-- Pilih Provinsi --</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5 class="col-white">Alamat Lengkap</h5>                                        
                                        <select class="form-control show-tick" name="kab">
                                            <option value="">-- Pilih Kabupaten --</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">                                                                                
                                        <select class="form-control show-tick" name="kec">
                                            <option value="">-- Pilih Kecamatan --</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">                                                                                
                                        <select class="form-control show-tick" name="desa">
                                            <option value="">-- Pilih Desa --</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">                                        
                                        <input type="text" class="form-control" name="alamat" placeholder="alamat..." />
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-line">                                        
                                        <input type="number" class="form-control" name="rt" placeholder="rt..." />
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-line">                                        
                                        <input type="number" class="form-control" name="rw" placeholder="rw..." />
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-line">                                        
                                        <input type="number" class="form-control" name="kodepos" placeholder="kodepos..." />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>No. Handphone/ WA</h5>
                                        <input type="number" class="form-control" name="nohp" placeholder="no. hp/wa..." />
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-line">
                                        <h5>Asal Sekolah</h5>
                                        <input type="text" class="form-control" name="asal" placeholder="asal sekolah..." />
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-line">
                                        <h5>Jurusan</h5>
                                        <input type="text" class="form-control" name="jurusan" placeholder="jurusan/prodi..." />
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-line">
                                        <h5>No. SKHUN</h5>
                                        <input type="text" class="form-control" name="skhun" placeholder="no. skhun..." />
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-line">
                                        <h5>Tahun Lulus</h5>
                                        <input type="number" class="form-control" name="tahun" placeholder="tahun..." />
                                    </div>
                                </div>

                            </div>
                            
                                                        

                            <h2 class="card-inside-title">B. Informasi Orang Tua / Wali</h2>
                            <div class="">

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Nama Ayah</h5>
                                        <input type="text" class="form-control" name="ayah" placeholder="nama ayah..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5>Pekerjaan Ayah</h5>                                        
                                        <select class="form-control show-tick" name="akerja">
                                            <option value="">-- Pilih Pekerjaan --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5>Pendidikan Ayah</h5>                                        
                                        <select class="form-control show-tick" name="asekolah">
                                            <option value="">-- Pilih --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Nama Ibu</h5>
                                        <input type="text" class="form-control" name="ibu" placeholder="nama ibu..." />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5>Pekerjaan Ibu</h5>                                        
                                        <select class="form-control show-tick" name="ikerja">
                                            <option value="">-- Pilih --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-line">
                                    <h5>Pendidikan Ibu</h5>                                        
                                        <select class="form-control show-tick" name="isekolah">
                                            <option value="">-- Pilih --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                    <h5>Rata - Rata Penghasilan</h5>                                        
                                        <select class="form-control show-tick" name="gaji">
                                            <option value="">-- Pilih --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>

                            </div>                            

                            <h2 class="card-inside-title">C. Informasi prestasi Calon Mahasiswa</h2>
                            <div class="">

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Cabang Lomba</h5>
                                        <input type="text" class="form-control" name="lomba" placeholder="nama ibu..." />
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-line">
                                    <h5>Tingkat Lomba</h5>                                        
                                        <select class="form-control show-tick" name="tingkat">
                                            <option value="">-- Pilih --</option>
                                            <option value="Kecamatan">Kecamatan</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                            <option value="Provinsi">Provinsi</option>
                                            <option value="Nasional">Nasional</option>
                                            <option value="Internasional">Internasional</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-line">
                                    <h5>Peringkat Lomba</h5>                                        
                                        <select class="form-control show-tick" name="peringkat">
                                            <option value="">-- Pilih --</option>
                                            <option value="Juara I">Juara I</option>
                                            <option value="Juara II">Juara II</option>
                                            <option value="Juara III">Juara III</option>
                                            <option value="Juara Harapan">Juara Harapan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-line">
                                        <h5>Tahun Lomba</h5>
                                        <input type="number" class="form-control" name="tahunl" placeholder="tahun lomba..." />
                                    </div>
                                </div>

                            </div>                            

                            <h2 class="card-inside-title">D. Informasi Penunjang</h2>
                            <div class="">

                                <div class="col-sm-12">
                                    <div class="form-line">
                                        <h5>Organisasi Masyarakat Orang Tua/Wali</h5>
                                        <input type="text" class="form-control" name="org" placeholder="nu/ muhammadiah / dll..." />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-line">
                                    <h5>Keadaan Calon Mahasiswa</h5>                                        
                                        <select class="form-control show-tick" name="keadaan">
                                            <option value="">-- Pilih --</option>
                                            <option value="Lengkap">Lengkap</option>
                                            <option value="Yatim">Yatim</option>
                                            <option value="Piatu">Piatu</option>
                                            <option value="Yatim Piatu">Yatim Piatu</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                                <center>
                                <div class="button-demo">
                                    <button type="button" class="btn bg-pink waves-effect">DAFTAR</button>                                                                        
                                </div>
                                </center>                        
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            
        </div>
    </section>
@endsection