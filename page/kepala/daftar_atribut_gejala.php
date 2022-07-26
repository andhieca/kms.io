<?php
ob_start();
    if($_SESSION['nip']!=""){
   
?>    
    <div class="page-title">
        <div class="title_left">
            <h3>
                    Daftar Atribut Gejala
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       <center><a href="index.php?page=tambah_daftar_atribut_gejala"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-plus"> Tambah Atribut Gejala </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                             <?php
                                        
                                        $link = koneksi_db();
                                        $sql = ("SELECT * FROM t_atributgejala");
                                        
                                        $tampil=mysql_query($sql,$link);
                                        $banyakrecord=mysql_num_rows($tampil);
                                        if($banyakrecord>0){

                             ?>
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>Id Atribut </th>
                                    <th>Nama Atribut Gejala </th>
                                  
                                    <th align="center">Aksi </th>
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
                                        <?php echo $data['id_atributgejala'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_atributgejala'];?>
                                    </td>
                                  
                                     <td align="center">
                                            <a href="index.php?page=ubah_daftar_atribut_gejala&&id_atributgejala=<?php echo $data['id_atributgejala'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Ubah </a>
                                     <a href="hapus_gejala.php?id_atributgejala=<?php echo $data['id_atributgejala'];?>" class="btn btn-danger btn-xs" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data <?php echo $data['nama_atributgejala'];?>?')) return false;"><i class="fa fa-remove"></i> hapus </a>
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