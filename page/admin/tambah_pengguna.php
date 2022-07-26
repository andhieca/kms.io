 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Tambah Data Pengguna
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_pengguna_proses.php" method="POST" >

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                    
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nama_pengguna" class="form-control col-md-7 col-xs-12" type="text" name="nama_pengguna" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="level" class="form-control" required data-parsley-id="5674" name="level">
                                                    <option>Pilih..</option>
                                                    <option>admin</option>
                                                    <option>kepala</option>
                                                    <option>petugas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" data-validate-linked="email" required="required" type="text" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="jabatan" class="form-control" required data-parsley-id="5674" name="jabatan">
                                                    <option>Pilih..</option>
                                                    <option>Administratif</option>
                                                    <option>Kepala Bagian Kesehatan Hewan</option>
                                                    <option>Petugas IB</option>
                                                    <option>Petugas Perawatan</option>
                                                    <option>Petugas Pengobatan</option>
                                                
                                                </select>
                                            </div>
                                        </div>

                                         <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tanggal lahir <span class="required"></span>
                                            </label>
                                             <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="col-md-8 xdisplay_inputx form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="tanggal lahir" aria-describedby="inputSuccess2Status4" name="tanggal_lahir" >
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class=" form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                               <a href="index.php?page=data_pengguna" class="btn btn-primary">Batal</a>
                                                <button type ="submit" class="btn btn-success" onclick="return confirm('Simpan data?')"> Simpan</button>

                                            </div>
                                        </div>

                                    </form>
                    
                </div>
            </div>
        </div>
    </div>
       <?php
    }
    else{
    header("Location:../../belum_login.php");
}
ob_end_flush();
?>