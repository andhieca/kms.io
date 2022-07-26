<?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
  
?>    
    <div class="page-title">
        <div class="title_left">
            <h3>
                    Daftar Kategori
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       <center><a href="index.php?page=tambah_kategori"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-plus-square"> Tambah Data Kategori </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>Nama Kategori </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>  

                            <tbody>
                            <?php
                                        
                                        $tampil=mysql_query("SELECT * FROM t_kategori",$link);
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
                                        <?php echo $data['nama_kategori'] ; ?>
                                    </td>
                                     <td align="center">
                                            <a href="index.php?page=ubah_kategori&&id_kategori=<?php echo $data['id_kategori'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                            
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