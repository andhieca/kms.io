 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Ubah Data Pengguna
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
                            $nip=$_GET['nip'];
                            $query=mysql_query("SELECT * FROM t_pengguna WHERE nip='$nip'",$link);
                            $data=mysql_fetch_array($query);
                        ?>
                                
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="ubah_pengguna_proses.php" method="POST" >

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip" >NIP <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nip" name="nip" readonly value="<?php echo $data['nip'];?>" required="required" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                       
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password" >Password <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="password" name="password" value="<?php echo $data['password'];?>" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nama_pengguna" value="<?php echo $data['nama_pengguna'];?>" class="form-control col-md-7 col-xs-12" type="text" name="nama_pengguna" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="level" class="form-control" required data-parsley-id="5674" name="level">
                                                    <option><?php echo $data['level'];?></option>
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
                                                <input type="text" name="email" value="<?php echo $data['email'];?>" class="date-picker form-control col-md-7 col-xs-12" data-validate-linked="email" required="required" type="text" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <p>
                                            <?php
                                                if($data['status']=='Tidak Aktif'){
                                            ?>
                                                 Aktif:
                                                <input type="radio" class="flat" name="status" id="status" value="Aktif"/> 
                                                Tidak Aktif:
                                                <input type="radio" class="flat" name="status" id="status" value="Tidak Aktif" checked=""/>

                                         <?php
                                            }
                                        
                                            else {
                                            ?>
                                            Aktif:
                                                <input type="radio" class="flat" name="status" id="status" value="Aktif" checked=""/> 
                                                Tidak Aktif:
                                                <input type="radio" class="flat" name="status" id="status" value="Tidak Aktif"/> 
                                            <?php
                                            }
                                            ?>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="jabatan" class="form-control" name="jabatan" value="<?php echo $data['jabatan'];?>">
                                                    <option><?php echo $data['jabatan'];?></option>
                                                    <option>Administratif</option>
                                                    <option>Kepala Bagian Kesehatan Hewan</option>
                                                    <option>Petugas IB</option>
                                                    <option>Petugas Perawatan</option>
                                                    <option>Petugas Pengobatan</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class=" form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=data_pengguna" type="reset" class="btn btn-primary"> Batal</a>
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