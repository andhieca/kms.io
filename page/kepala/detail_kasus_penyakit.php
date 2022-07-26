 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
   
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Detail Penyakit
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

                        $id_kasus = $_GET['id_kasus'];
                        $query =mysql_query("SELECT t_kasus.solusi, t_kasus.nama_kasus FROM t_kasus WHERE
                                                     t_kasus.`id_kasus` = '$id_kasus'",$link);
                        
                        $datakasus=mysql_fetch_array($query);
                        $i=0;
                        ?>
                        <dl>
                        <dt>Nama Penyakit</dt>                      
                        <br>
                        <?php echo $datakasus['nama_kasus'];?>
                        <hr>
                        <dt>Gejala yang dialami</dt>
                        <br>
                        <ol>
                            <?php
                                                    $query2 =mysql_query("SELECT t_detail_kasus.`id_atributgejala`, 
                                                    t_atributgejala.`nama_atributgejala` 
                                                    FROM t_detail_kasus, t_atributgejala
                                                    WHERE t_detail_kasus.`id_atributgejala` = t_atributgejala.`id_atributgejala` 
                                                    AND t_detail_kasus.`id_kasus` = '$id_kasus'",$link);
                        ?>
                        <?php
                            while($data=mysql_fetch_array($query2)){                             
                        ?>
                        <dd>
                            <li><?php echo $data['id_atributgejala'];?> | <?php echo $data['nama_atributgejala'];?></li>
                        </dd>
                        <?php
                            }
                        ?>
                        </ol>
                        <hr>
                        
                        <dt>Solusi</dt>
                        <br/>
                        <dd><?php echo $datakasus['solusi'];?></dd>
                    </dl>
                    <a href="index.php?page=daftar_kasus_penyakit"<button type="reset" class="btn btn-primary">Kembali</button></a>
                    
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