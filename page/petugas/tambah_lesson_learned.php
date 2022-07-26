 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    $nip = $_SESSION['nip'];
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Lesson Learned
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_lesson_learned_proses.php" method="POST">
                                        <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nip;?>" style="display:none">
                                        <div class="form-group">
                                            <h2>Jenis Penanganan</h2>
                                            <div >
                                                <input type="text"  name="jenis_penanganan" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h2>Tanggal Penanganan</h2>
                                            <div >
                                                <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="col-md-8 xdisplay_inputx form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="tanggal Penanganan" aria-describedby="inputSuccess2Status4" name="tanggal_penanganan">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Informasi Peternak</h2>
                                        <div class="col-md-3 form-group">
                                            <label for="judul">no anggota <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="no_anggota" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                                
                                            </div>
                                        </div>
                                          <div class="col-md-6 form-group">
                                            <label for="judul">nama lengkap<span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="nama_anggota" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                                
                                            </div>
                                        </div>
                                         <div class="col-md-3 form-group">
                                            <label for="judul">Alamat / kelompok <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="alamat_anggota" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            
                                        </div>
                                        <hr>
                                      
                                         <h2>Informasi Sapi yang ditangani </h2>
                                        

                                        <div class="col-md-3 form-group">
                                            <label for="judul">Nomor telinga <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="nomor_telinga" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="judul">Nama Sapi <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="nama_sapi" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            
                                        </div>
                                        <hr>
                                                
                                        <div class="form-group">
                                          <center><h1>Hasil Penanganan</h1><font color="red">(* isi sesuai jenis penanganan)</font></center>
                                          <center><font color="red">(* Keterangan hasil penanganan wajib diisi)</font></center>
                                        </div>
                                         <br>
                                         <br>

                                        <h2>Penanganan IB (Inseminasi Buatan) </h2>
                                        

                                        <div class="col-md-3 form-group">
                                            <label for="judul">Kode Pejantan <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="kode_pejantan" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="judul">Nama Pejantan <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="nama_pejantan" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="judul">IB ke <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="proses_ib" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="judul">Dosis <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text"  name="dosis" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                       
                                         <div class="form-group">
                                            
                                        </div>  
                                        <hr>

                                        <h2>Penanganan PKB (Prediksi Kebuntingan) </h2>
                                        

                                        <div class="col-md-6 form-group">
                                            <label for="judul">Informasi PKB<span class="required"></span>

                                            </label>
                                            <br>
                                           
                                            <select class="control-label col-md-6 col-sm-3 col-xs-12" name="penanganan_pkb">
                                                <option></option>
                                                <option>bunting</option>
                                                <option>tidak bunting</option>
                                                <option>ragu</option>

                                               
                                            </select>
                                               
                                        </div>
                                        
                                        <br>

                                         <div class="form-group">
                                             
                                        </div>
                                        <hr>
                                            <h2>Penanganan Lainnya </h2>
                                        

                                        <div class="col-md-12 form-group">
                                            <div >
                                                <input type="text"  name="penanganan_lainnya" class="form-control col-md-7 col-xs-12" >
                                            </div>
                                               
                                        </div>
                                        
                                        <br>

                                         <div class="form-group">
                                             
                                        </div>

                                        <hr>
                                         <h2>Keterangan Hasil Penanganan</h2>
                                          <textarea class="form-control textarea" name="keterangan" rows="5" required="true" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" placeholder="Keterangan Hasil Penanganan wajib diisi!" ></textarea>
                                        <div class="form-group">
                                            <br>
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=lesson_learned"<button type="reset" class="btn btn-primary">Batal</button></a>
                                               <button type ="submit" class="btn btn-success" onclick="if(confirm!('Simpan data?'))">Simpan</button></a>
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