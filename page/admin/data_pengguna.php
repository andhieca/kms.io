<?php
ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?>    
    <div class="page-title">
        <div class="title_left">
            <h3>
                    Data Pengguna
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       <center><a href="index.php?page=tambah_pengguna"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-plus-square"> Tambah Data </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>NIP </th>
                                    <th>Nama </th>
                                    <th>Level </th>
                                    <th>Email </th>
                                    <th>Jabatan </th>
                                    <th>Status </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>  

                            <tbody>
                            <?php
                                        
                                        $tampil=mysql_query("SELECT * FROM t_pengguna",$link);
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
                                        <?php echo $data['nip'] ; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_pengguna']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['level']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['jabatan']; ?>
                                    </td>
                                    <td>
                                        <i class="btn btn-success btn-xs"><?php echo $data['status']; ?></i>
                                    </td>
                                     <td align="center">
                                            <a href="index.php?page=ubah_pengguna&&nip=<?php echo $data['nip'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                            
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