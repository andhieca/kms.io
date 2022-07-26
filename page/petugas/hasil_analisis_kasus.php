 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
   $id_terbesar = $_GET['id_kasus'];
   $nilai_terbesar = $_GET['nilaiTerbesar'];
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Hasil Analisis
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                         <h2><p>Identitas Sapi</p></h2>
                        <?php

                       $query = "SELECT * FROM t_identitas_kasus WHERE id_identitas_kasus IN (SELECT MAX(id_identitas_kasus) FROM t_identitas_kasus)";
        
                        $result=mysql_query($query,$link);
                
                        $data=mysql_fetch_array($result);
                        
                       ?>
                    <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_sapi">Nama Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="nama_sapi" name="nama_sapi" value="<?php echo $data['nama_sapi'];?>" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telinga">No Telinga Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="no_telinga" name="no_telinga" value="<?php echo $data['no_telinga'];?>" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis kelamin Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur_sapi">Umur Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="umur_sapi" name="umur_sapi" value="<?php echo $data['umur_sapi'];?> tahun" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                    </form>
                      <div class="ln_solid"></div>
                        <br/>
                        <?php

                       $query = "SELECT * FROM t_kasus WHERE id_kasus = '$id_terbesar'";
        
                        $result2=mysql_query($query,$link);
                
                        $row=mysql_fetch_array($result2);
                        
                       ?>
                  <br>
                        
                        <dl>
                        <dt>Nama Penyakit</dt>                      
                        <br>
                         <div class="alert alert-info alert-dismissible fade in" role="alert">
                                   
                                    <h3><p> <?php echo $row['nama_kasus'];?> </p></h3>
                                </div>
                        
                        <hr>
                        <dt>Nilai Persentase penyakit</dt>
                        <br>
                        <ol>
                      
                        <dd>
                        <?php echo $nilai_terbesar;?>
                        </dd>
                       
                        </ol>
                        <hr>
                        
                        <dt>Solusi</dt>
                        <br/>
                        <dd><?php echo $row['solusi'];?></dd>
                    </dl>

                    <a href="index.php?page=analisa_kasus"<button type="reset" class="btn btn-primary">Kembali</button></a>
                    
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