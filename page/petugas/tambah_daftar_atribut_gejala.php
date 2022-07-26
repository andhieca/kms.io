 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Tambah Daftar Atribut Gejala
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_daftar_atribut_gejala_proses.php" method="POST">
                                        <?php
                                            $query=mysql_query("SELECT COUNT(id_atribut_gejala)+1
                                                                    FROM t_atributgejala
                                                                    WHERE id_atribut_gejala LIKE '%G%'");
                                            $dataJumlah=mysql_fetch_array($query);

                                            $atribut = $dataJumlah['COUNT(id_atribut_gejala)+1'];

                                            if($atribut<10){
                                                $nomor_urut = "00".$atribut;
                                            }
                                            else if(($atribut>9)&&($atribut<100)){
                                                $nomor_urut = "0".$atribut;
                                            }
                                        ?>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gejala">Id Atribut Gejala <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <input type="text" id="id_atribut_gejala" name="id_atribut_gejala" value="<?php echo "G".$nomor_urut ?>" class="form-control col-md-7 col-xs-12" readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gejala">Gejala <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nama_atributgejala" name="nama_atributgejala" required="required" class="form-control col-md-7 col-xs-12" placeholder="Masukan gejala baru..." oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=daftar_atribut_gejala"<button type="reset" class="btn btn-primary">Batal</button></a>
                                                <a href="index.php?page=tambah_atribut_gejala_sukses"><button type ="submit" class="btn btn-success" onclick="return confirm('Simpan data?')">Simpan</button></a>
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