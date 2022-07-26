<?php
ob_start();
    if($_SESSION['nip']!=""){
   
?>    
    <div class="page-title">
        <div class="title_left">
            <h3>
                    Daftar Revisi Penyakit
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                             <?php
                                        
                                        $link = koneksi_db();
                                        $sql = ("SELECT * FROM t_kasus
                            WHERE t_kasus.status_cbr<>'Retain'");
                                        
                                        $tampil=mysql_query($sql,$link);
                                        $banyakrecord=mysql_num_rows($tampil);
                                        if($banyakrecord>0){

                             ?>
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>Id Penyakit </th>
                                    <th>Nama Penyakit</th>
                                    <th><center>status</center> </th>
                                    <th><center>Aksi</center> </th>
                                </tr>
                            </thead>  

                            <tbody>
                           
                                <?php
                                        $i=0; 
                                        while($data=mysql_fetch_array($tampil)){ 
                                        $i++;?>                        
                                <tr class="even pointer">
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['id_kasus'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_kasus'];?>
                                    </td>
                                      <td>
                                        <?php echo $data['status_cbr'];?>
                                    </td>
                                         <td align="center">
                                            <a href="index.php?page=detail_kasus_penyakit&&id_kasus=<?php echo $data['id_kasus'];?>" class="btn btn-info btn-xs"><i class="fa fa-gear"></i> Lihat </a> |
                                             <a href="index.php?page=ubah_kasus_penyakit&&id_kasus=<?php echo $data['id_kasus'];?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody> 
                        </table>
                        <?php
                    }
                    ?>
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