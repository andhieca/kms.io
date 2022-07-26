<?php
ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    $nip = $_SESSION['nip'];
    $Nama  = $_SESSION['nama_pengguna'];
    require_once('../../config/time_since.php');
?>    

    <div class="page-title">
        <div class="title_left">
            <h3>
                    Forum KUD Sarwa Mukti - Kesehatan Hewan
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                       <center><a href="index.php?page=tambah_forum_diskusi"><button type="button" class="btn btn-round btn-success btn-lg" ><i class="fa fa-wechat"> Tambah Forum Diskusi </i></button></a></center>
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                  <?php
                                     
                                        $tampil=mysql_query("select t_forum.id_forum, t_forum.judul_forum, t_forum.nip, t_forum.isi_forum ,t_forum.tanggal_post, t_pengguna.nama_pengguna, t_pengguna.foto, t_kategori.nama_kategori from t_forum, t_pengguna, t_kategori where t_forum.nip = t_pengguna.nip and t_forum.id_kategori=t_kategori.id_kategori ORDER BY t_forum.tanggal_post DESC",$link);
                    
                                        $banyakrecord=mysql_num_rows($tampil);
                                        if($banyakrecord>0){
                                    ?>
                                <tr class="headings">
                                    <th>No </th>
                                    <th><center>Topik Pembahasan</center> </th>
                                    <th><center>Kategori</center> </th>

                                 

                                    
                                </tr>
                            </thead>  

                            <tbody>
                          
                            <?php
                                        $i=0; 
                                        while($data=mysql_fetch_array($tampil)){ 
                                        $i++;?>                        
                                <tr class="even pointer">
                                    <?php
                                    $waktu = $data['tanggal_post'];
                                    $id_forum = $data['id_forum'];
                                    ?>
                                    <td>
                                        <?php echo $i; ?>

                                    </td>
                                    <td> 
                                       <ul class="messages">
                                                        <li>
                                                            <?php
                                                                if($data['foto']==NULL){
                                                            ?>
                                                                    <img src="../../images/user.png" alt="avatar" class="avatar" />
                                                            <?php
                                                                }else{
                                                            ?>
                                                                   <img src="<?php echo $data['foto'];?>" class="avatar" alt="Avatar">
                                                            <?php
                                                                }
                                                            
                                                            ?>
                                                            
                                                            <div class="message_date">
                                                                <h5 class="date text-info"><?php time_since(strtotime($waktu)); echo time_since(strtotime($waktu));?></h5>
                                                                
                                                            </div>
                                                            <div class="message_wrapper">
                                                                <h4 class="heading"><?php echo $data['nama_pengguna']?></h4>
                                                                 <a href="index.php?page=detail_forum&&id_forum=<?php echo $id_forum?>"><blockquote class="message"><?php echo $data['judul_forum']?></blockquote></a>
                                                                 <br/>
                                                                    <h5 class="message_wrapper"><?php echo $data['isi_forum']?></h5>
                                                                <br />
                                                                <p align="right">
                                                                  <?php
                                                                      $nip=$data['nip'];
                                                                      if($nip==$_SESSION['nip']){
                                                                    ?>
                                                                      <p class="url">
                                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                        <a href="hapus_forum.php?id_forum=<?php echo $data['id_forum'];?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data forum ?')) return false;"><i class="fa fa-trash"></i> Hapus</a>
                                                                       
                                                                                                       
                                                                      </p>
                                                                      <?php
                                                                    }
                                                                    ?>
                                                            </div>
                                                        </li>
                                        </ul>                                               
                                    </td>
                                    <td>
                                        <?php echo $data['nama_kategori'];?>
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