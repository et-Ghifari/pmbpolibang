@extends('home')

@section('content') 
                <div class="content-error">
                    <h2>
                        Pendaftaran Politeknik Balekambang <span class="counter"> <?php echo date('Y'); ?> </span>
                    </h2>
                </div>               
            
                <div>
                <br>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                        
                        <form action="#">

                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>A. Informasi Pribadi Calon Mahasiswa</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">                                                
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">NISN</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="nisn" class="form-control" placeholder="nisn..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">NIK</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="nik" class="form-control" placeholder="nik..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="nama" class="form-control" placeholder="nama lengkap..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tempat Tanggal Lahir</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <div class="form-select-list">
                                                            <input type="text" name="tempatlahir" class="form-control" placeholder="tempat...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="form-group data-custon-pick" id="data_3">                                                            
                                                            <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" name="tanggallahir" class="form-control" placeholder="1/1/2004">
                                                            </div>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <label class="login2 pull-right pull-right-pro">Jenis Kelamin</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                        <div class="bt-df-checkbox pull-left">                                                                
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="i-checks pull-left">
                                                                        <label>
                                                                        <input type="radio" value="L" name="kelamin"> <i></i>Laki - Laki</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="i-checks pull-left">
                                                                        <label>
                                                                        <input type="radio" value="P" name="kelamin"> <i></i>Perempuan</label>
                                                                    </div>
                                                                </div>
                                                            </div>                                                                
                                                        </div>
                                                    </div>
                                                </div>                                                    
                                            </div>                                                
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Hobi</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="hobi" class="form-control" placeholder="hobi..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Cita - Cita</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="cita" class="form-control" placeholder="cita-cita..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Anak-ke</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="touchspin-inner">                                                                
                                                            <input class="touchspin3" type="text" name="anakke" placeholder="isi angka..." />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Berat Badan</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-group">
                                                            <input type="text" name="berat" class="form-control" placeholder="isi angka..." />
                                                            <span class="input-group-addon">KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tinggi Badan</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-group">
                                                            <input type="text" name="tinggi" class="form-control" placeholder="isi angka..." />
                                                            <span class="input-group-addon">CM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Jumlah Saudara</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="touchspin-inner">                                                                
                                                            <input class="touchspin3" type="text" name="saudara" placeholder="isi angka..." />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Alamat Lengkap</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="provinsi">
                                                                <option>--Pilih Provinsi--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="kabupaten">
                                                                <option>--Pilih Kabupaten--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="kecamatan">
                                                                <option>--Pilih Kecamatan--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="desa">
                                                                <option>--Pilih Desa--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list basic-ele-mg-t-10">
                                                                    <div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">RT</span>
                                                                            <input type="text" name="rt" placeholder="rt..." class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list basic-ele-mg-t-10">
                                                                    <div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">RW</span>
                                                                            <input type="text" name="rw" placeholder="rw..." class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-select-list basic-ele-mg-t-10">
                                                                    <div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Kodepos</span>
                                                                            <input type="text" name="kodepos" placeholder="kodepos..." class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"></label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="alamat" class="form-control" placeholder="alamat/jln./dll..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nomor Telephone/WA</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-select-list basic-ele-mg-t-10">
                                                                    <div>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">+62</span>
                                                                            <input type="text" name="telephone" placeholder="isi nomor..." class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Asal Sekolah</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-select-list">
                                                            <input type="text" name="sekolah" class="form-control" placeholder="sekolah...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <div class="form-select-list">
                                                            <input type="text" name="jurusan" class="form-control" placeholder="jurusan...">
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="sparkline12-graph">
                                                    <div class="input-knob-dial-wrap">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No. SKHUN</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="input-mark-inner mg-b-22">
                                                                    <input type="text" name="skhun" class="form-control" data-mask="9-99-99-99-999-999-9" placeholder="no. skhun...">                                                                    
                                                                </div>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tahun Lulus</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="tahunlulus" class="form-control" placeholder="tahun lulus..." />
                                                    </div>
                                                </div>
                                            </div>                                                 
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                            <br></br>

                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>B. Pilihan Program Studi</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pilih Prodi</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="prodi">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pilih Kelas</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="kelas">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>                           
                                        </div>                                                        
                                    </div>
                                </div>
                            </div>
                                                

                            <br></br>

                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>C. Informasi Orang Tua / Wali</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Ayah</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="ayah" class="form-control" placeholder="nama ayah..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pekerjaan Ayah</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="pekerjaanayah">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pendidikan Ayah</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="pendidikanayah">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>

                                            <br>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Nama Ibu</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="ibu" class="form-control" placeholder="nama ibu..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pekerjaan Ibu</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="pekerjaanibu">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Pendidikan Ibu</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="pendidikanibu">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>

                                            <br>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Rata - Rata Penghasilan Perbulan</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="penghasilan">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>                          
                                        </div>                                                        
                                    </div>
                                </div>
                            </div>
                            

                            <br></br>

                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>D. Informasi prestasi Calon Mahasiswa</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Cabang Lomba</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="lomba" class="form-control" placeholder="cabang lomba..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tingkat Lomba</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="tingkat">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div> 
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Peringkat</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select class="form-control custom-select-value" name="peringkat">
                                                                <option>--Pilih--</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tahun Lomba</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="tahunlomba" class="form-control" placeholder="tahun lomba..." />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                        
                                </div>
                            </div>

                            <br>                           

                            <div class="form-group-inner">
                                <div class="login-btn-inner">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-9">
                                            <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                <button class="btn btn-white" type="submit">Cancel</button>
                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                        </form>

                        </div>
                    </div>
                </div>
                
@endsection