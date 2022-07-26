 <?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Detail Lesson Learned
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
                        $id_lesson_learned = $_GET['id_lesson_learned'];
                        $querylesson =mysql_query("SELECT t_lesson_learned.judul, t_pengguna.nama_pengguna, t_lesson_learned.isi, t_lesson_learned.tanggal_posting FROM t_lesson_learned, t_pengguna where t_pengguna.nip=t_lesson_learned.nip and id_lesson_learned='$id_lesson_learned'",$link);
                        $data=mysql_fetch_array($querylesson);
                        ?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_daftar_kategori_proses.php" method="POST">

                                        <div class="form-group">
                                            <h3><label for="judul"><?php echo $data['judul'];?>
                                            </label></h3>
                                            <div class="pull-right">
                                        <strong>Dipost Oleh : <?php echo $data['nama_pengguna'];?></strong><br>
                                        <strong><?php echo $data['tanggal_posting'];?></strong><br>
                                        </div>
                                        </div>
                                        
                                        <hr>
                                       
                                        <p>
                                       
                                        <?php echo $data['isi']; ?><br><br>
                                        </p>
                                        
                                        <div class="ln_solid"></div>
                                                                                
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
?>