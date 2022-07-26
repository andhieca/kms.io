<?php
ob_start();
    if($_SESSION['nip']!=""){
    $link=koneksi_db();
   
?>    

    <div class="page-title">
        <div class="title_left">
            <h3>
                    Daftar Dokumen
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       <center><a href="index.php?page=unggah_dokumen"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-cloud-upload"> Unggah Dokumen </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                             <?php
                                        
                                        $link = koneksi_db();
                                        $sql = ("SELECT t_dokumen.id_dokumen, t_dokumen.id_kategori, t_dokumen.nip, t_dokumen.nama_dokumen, t_kategori.nama_kategori, t_pengguna.nama_pengguna, t_dokumen.tanggal_unggah, t_dokumen.dokumen_pengetahuan FROM t_dokumen, t_pengguna, t_kategori WHERE t_dokumen.nip = t_pengguna.nip AND t_kategori.id_kategori= t_dokumen.id_kategori");
                                        
                                        $tampil=mysql_query($sql,$link);
                                        $banyakrecord=mysql_num_rows($tampil);
                                        if($banyakrecord>0){

                             ?>
                            <thead>
                                <tr class="headings">
                                    <th>No </th>
                                    <th>Nama Dokumen </th>
                                    <th>Kategori </th>
                                    <th>Nama pengunggah </th>
                                    <th>Waktu Unggah </th>
                                    <th align="center">Unduh </th>
                                    <th align="center">Hapus </th>
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
                                        <?php echo $data['nama_dokumen'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_kategori'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['nama_pengguna'];?>
                                    </td>
                                    <td>
                                        <?php echo $data['tanggal_unggah'];?>
                                    </td>
                                     <td align="center">
                                            <a href="<?php echo $data['dokumen_pengetahuan'];?>">
                                                <button type="button" class="btn btn-round btn-info btn-sm" >
                                                    <i class="fa fa-download" data-toggle="tooltip" title="Unduh File"></i>
                                                </button>
                                            </a>
                                    </td>
                                     <td align="center">
                                            <a href="hapus_dokumen.php?id_dokumen=<?php echo $data['id_dokumen'];?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus dokumen <?php echo $data['nama_dokumen'];?>?')) return false;">
                                                <button type="button" class="btn btn-round btn-danger btn-sm" >
                                                    <i class="fa fa-remove" data-toggle="tooltip" title="hapus dokumen"></i>
                                                </button>
                                            </a>
                                           
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