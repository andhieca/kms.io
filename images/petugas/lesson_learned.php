<?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
  
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
                                    <th>Topic Lesson Learned </th>
                                    <th>Nama Pembuat </th>
                                    <th>Tanggal Dibuat </th>
                                    
                                    <th>Aksi </th>
                                </tr>
                            </thead>  

                            <tbody>
                            <?php
                                        
                                        $tampil=mysql_query("SELECT t_lesson_learned.id_lesson_learned, t_lesson_learned.judul, t_pengguna.nama_pengguna, t_lesson_learned.isi, t_lesson_learned.tanggal_posting FROM t_lesson_learned, t_pengguna where t_pengguna.nip=t_lesson_learned.nip",$link);
                                        //$total=mysql_num_rows($tampil); ?>
                            <?php
                                        $i=0; 
                                        while($data=mysql_fetch_array($tampil)){ 
                                        $i++;?>                        
                                <tr class="even pointer">
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['judul'] ; ?>
                                    </td>
                                      <td>
                                        <?php echo $data['nama_pengguna'] ; ?>
                                    </td>
                                      <td>
                                        <?php echo $data['tanggal_posting'] ; ?>
                                    </td>
                                   
                                     <td align="center">
                                            <a href="index.php?page=detail_lesson_learned&&id_lesson_learned=<?php echo $data['id_lesson_learned'];?>" class="btn btn-info btn-xs"><i class="fa fa-gear"></i> View </a>
                                            
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
?>