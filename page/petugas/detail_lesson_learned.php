 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    require_once('../../config/time_since.php');
   
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Detail Lesson Learned (Histori Penanganan)
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
                        $querylesson =mysql_query("SELECT * FROM t_lesson_learned, t_pengguna, t_histori_penanganan where t_pengguna.nip=t_lesson_learned.nip and t_lesson_learned.id_lesson_learned=t_histori_penanganan.id_lesson_learned and t_lesson_learned.id_lesson_learned='$id_lesson_learned'",$link);
                        $data=mysql_fetch_array($querylesson);
                        $waktu = $data['tanggal_posting'];
                        ?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_daftar_kategori_proses.php" method="POST">

                                        <div class="form-group">
                                            <h3><label for="judul"><?php echo $data['jenis_penanganan'];?>
                                            </label></h3>
                                            <div class="pull-right">
                                        <strong>Dipost Oleh Petugas : <?php echo $data['nama_pengguna'];?></strong><br>
                                        <i class="fa fa-clock-o"><strong> <?php time_since(strtotime($waktu)); echo time_since(strtotime($waktu));?></strong></i><br>
                                        </div>
                                        </div>
                                        
                                        <hr>
                                       
                                        <p>
                                            
                                            
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th colspan='2' bgcolor="grey"><center><h2><label for="judul">Informasi Peternak
                                            </label></h2></center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nama Peternak</th>
                                                <td><?php echo $data['nama_anggota'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Alamat/Kelompok</th>
                                                <td><?php echo $data['alamat_anggota'];?></td>
                                               
                                            <tr>
                                                <th scope="row">Tanggal Pelayanan</th>
                                                <td><?php echo $data['tanggal_penanganan'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Penanganan</th>
                                                <td><?php echo $data['jenis_penanganan'];?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>

                                     <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th colspan='2' bgcolor="grey" ><center><h2><label for="judul">Informasi Sapi yang ditangani
                                            </label></h2></center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">No Telinga</th>
                                                <td><?php echo $data['nomor_telinga'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Sapi</th>
                                                <td><?php echo $data['nama_sapi'];?></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                    if($data['jenis_penanganan']=="Inseminasi Buatan"){
                                    ?>
                                     <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th colspan='2' bgcolor="grey"><center><h2><label for="judul">Hasil Penanganan IB
                                            </label></h2></center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" >Kode Penjantan</th>
                                                <td><?php echo $data['kode_pejantan'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Penjantan</th>
                                                <td><?php echo $data['nama_pejantan'];?></td>
                                               
                                            <tr>
                                                <th scope="row">IB ke</th>
                                                <td><?php echo $data['proses_ib'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Dosis</th>
                                                <td><?php echo $data['dosis'];?> kali</td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan</th>
                                                <td><?php echo $data['keterangan'];?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                else if($data['jenis_penanganan']=="Prediksi Kebuntingan"){
                                    ?>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th colspan='2' bgcolor="grey"><center><h2><label for="judul">Hasil Penanganan PKB
                                            </label></h2></center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" >Informasi penanganan PKB</th>
                                                <td><?php echo $data['penanganan_pkb'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan</th>
                                                <td><?php echo $data['keterangan'];?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                else{
                                    ?>
                                      <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                               
                                                <th colspan='2' bgcolor="grey"><center><h2><label for="judul">Hasil Penanganan <?php echo $data['penanganan_lainnya'];?>
                                            </label></h2></center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" >Informasi penanganan <?php echo $data['penanganan_lainnya'];?></th>
                                                <td><?php echo $data['penanganan_lainnya'];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan</th>
                                                <td><?php echo $data['keterangan'];?></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                ?>
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
ob_end_flush();
?>