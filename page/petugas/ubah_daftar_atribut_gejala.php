 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Ubah Daftar Atribut Gejala
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
                            $id_atribut_gejala = $_GET['id_atribut_gejala'];
                            $query=mysql_query("SELECT * FROM t_atributgejala WHERE id_atribut_gejala='$id_atribut_gejala'");
                            $data=mysql_fetch_array($query);
                        ?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="ubah_daftar_atribut_gejala_proses.php" method="POST">
                                        <input type="text" id="id_atribut_gejala" name="id_atribut_gejala" required="required" style="display:none" class="form-control col-md-7 col-xs-12" value="<?php echo $data['id_atribut_gejala'];?>">
                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gejala">Gejala <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nama_atributgejala" name="nama_atributgejala" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data['nama_atributgejala'];?>" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=daftar_atribut_gejala"<button type="reset" class="btn btn-primary">Batal</button></a>
                                                <a href="index.php?page=ubah_kategori_sukses"><button type ="submit" class="btn btn-success">Simpan</button></a>
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