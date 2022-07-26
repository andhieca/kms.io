<?php
ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    require_once('../../config/time_since.php');
  
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
                       <center><a href="index.php?page=tambah_lesson_learned"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-plus-square"> Tambahkan Lesson Learned </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>Jenis Penanganan </th>
                                    <th>Nama Petugas </th>
                                    
                                    <th>Tanggal Penanganan  </th> 
                                    <th>Kategori penanganan  </th> 
                                    <th>Waktu Posting </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>  

                            <tbody>
                            <?php
                                        
                                        $tampil=mysql_query("SELECT * FROM t_lesson_learned, t_pengguna, t_histori_penanganan, t_kategori where t_pengguna.nip=t_lesson_learned.nip and t_lesson_learned.id_lesson_learned=t_histori_penanganan.id_lesson_learned and t_histori_penanganan.id_kategori=t_kategori.id_kategori order by tanggal_posting",$link);
                                       
                                        //$total=mysql_num_rows($tampil); ?>
                            <?php
                                        $i=0; 
                                        while($data=mysql_fetch_array($tampil)){ 
                                             $waktu = $data['tanggal_posting'];
                                        $i++;?>                        
                                <tr class="even pointer">
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['jenis_penanganan'] ; ?>
                                    </td>
                                      <td>
                                        <?php echo $data['nama_pengguna'] ; ?>
                                    </td>
                                     <td>
                                        <?php echo $data['tanggal_penanganan'] ; ?>
                                    </td>
                                     <td>
                                        <?php echo $data['nama_kategori'] ; ?>
                                    </td>
                                      <td>
                                        <?php time_since(strtotime($waktu)); echo time_since(strtotime($waktu));?>
                                    </td>
                                    
                                   
                                     <td align="center">
                                            <a href="index.php?page=detail_lesson_learned&&id_lesson_learned=<?php echo $data['id_lesson_learned'];?>" class="btn btn-info btn-xs"><i class="fa fa-gear"></i> View </a>
                                            <a href="hapus_lesson_learned.php?id_lesson_learned=<?php echo $data['id_lesson_learned'];?>" class="btn btn-danger btn-xs" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data lesson learned <?php echo $data['judul'];?>?')) return false;"><i class="fa fa-remove"></i> hapus </a>
                                               
                                    </td>
                                </tr>
                                
                                <?php
                            }
                            ?>
                            </tbody> 
                        </table>
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