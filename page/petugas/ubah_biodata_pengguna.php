 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Edit Profil
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                        <?php
                            $nip=$_SESSION['nip'];
                            $query=mysql_query("SELECT * FROM t_pengguna WHERE nip='$nip'",$link);
                            $data=mysql_fetch_array($query);
                        ?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="ubah_biodata_pengguna_proses.php" method="POST">

                                         <div class="form-group" style="display:none">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">nip <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data['nip'];?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">* Ganti Password <span></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nama_pengguna" class="form-control col-md-7 col-xs-12" type="text" name="nama_pengguna" value="<?php echo $data['nama_pengguna'];?>">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat" ><?php echo $data['alamat'];?></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <?php
                                                $tanggal_lahir = $data['tanggal_lahir'];
                                            ?>
                                            <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="col-md-8 xdisplay_inputx form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="tanggal lahir" aria-describedby="inputSuccess2Status4" name="tanggal_lahir" value="<?php echo date("m/d/Y", strtotime($tanggal_lahir))?>" >
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" required="required" type="email" value="<?php echo $data['email'];?>">
                                            </div>
                                        </div>
                                       
                                       <div class="form-group">
                                         <label class="control-label col-md-6 col-sm-6 col-xs-12">* Keterangan : Apabila password tidak diubah, dikosongkan saja<span class="required"></span>
                                            </label>
                                       </div>
                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=profile" class="btn btn-primary">Batal</button></a>
                                                <button type ="submit" class="btn btn-success">Simpan</button></a>
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