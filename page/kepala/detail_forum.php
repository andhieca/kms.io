<?php
ob_start();
    if($_SESSION['nip']!=""){
        $link       = koneksi_db();
        $nip        = $_SESSION['nip'];
        $id_forum   = $_GET['id_forum'];
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
                        <?php
                         $queryforum =mysql_query("select t_forum.id_forum, t_forum.judul_forum, t_forum.nip, t_forum.isi_forum ,t_forum.tanggal_post, t_pengguna.nama_pengguna, t_pengguna.foto, t_kategori.nama_kategori from t_forum, t_pengguna, t_kategori where t_forum.nip = t_pengguna.nip and t_forum.id_kategori=t_kategori.id_kategori and id_forum = '$id_forum'",$link);
                        $data=mysql_fetch_array($queryforum);
                        ?>
                      <?php $waktu1=$data['tanggal_post'];?>
                          <section class="comments">
                           <span class="badge bg-blue"><h2>Topik : <?php echo $data['judul_forum']?></h2></span> <span class="badge bg-green"><h2>Topik : <?php echo $data['nama_kategori']?></h2></span>
                          <article class="comment">
                            <div class="meta">
                              <?php
                                  if($data['foto']==NULL){
                                  ?>
                                    <img src="../../images/user.png" alt="avatar" class="avatarcomment" />
                                     <?php
                                          }else{
                                             ?>
                                            <img src="<?php echo $data['foto'];?>" class="avatarcomment">
                                      <?php
                                           }                             
                                       ?>
                              <h3><a class="author"><?php echo $data['nama_pengguna']?></a></h3>
                                <a class="date">
                                  <time><i class="fa fa-clock-o"> <?php time_since(strtotime($waktu1)); echo time_since(strtotime($waktu1));?></i></time>
                                </a>
                            </div>
                            <div class="content">

                              <b><p><?php echo $data['isi_forum']?></p></b>
                              
                            </div>
                            
                       
                        <div class="ln_solid"></div>
                                
                        <?php
                            
                            $sql=mysql_query("SELECT t_komentar.`id_forum`, 
                                                     t_komentar.`nip`, 
                                                     t_komentar.`id_komentar`, 
                                                     t_komentar.`isi_komentar`, 
                                                     t_komentar.`tanggal_komentar`, 
                                                     t_pengguna.`nama_pengguna`, 
                                                     t_pengguna.foto 
                                                     FROM t_komentar, t_pengguna,t_forum 
                                                     WHERE t_forum.`id_forum` = t_komentar.`id_forum` AND 
                                                     t_komentar.`nip` = t_pengguna.`nip` 
                                                     AND t_komentar.`id_forum`= '$id_forum' 
                                                    ORDER BY t_komentar.tanggal_komentar",$link);

                            
                           while($datakomentar=mysql_fetch_array($sql)){
                            $id_komentar = $datakomentar['id_komentar'];  
                            $querydetail=mysql_query("SELECT COUNT(IF(t_detail_komentar.`status` LIKE '%like%', t_detail_komentar.`status`,NULL)) AS baik,
                              COUNT(IF(t_detail_komentar.`status` LIKE '%unlike%', t_detail_komentar.`status`,NULL)) AS buruk
                                FROM t_detail_komentar
                                WHERE t_detail_komentar.`id_komentar` = '$id_komentar'");
                            $datadetail=mysql_fetch_array($querydetail);
                             
                        ?> 

                          <?php $waktu = $datakomentar['tanggal_komentar'];?>
                          <section class="comments">
                          <span class="badge"><h2>Komentar: <?php echo $data['judul_forum']?></h2></span>   
                        
                          <article class="comment ">
                            <div class="meta">
                              <?php
                                  if($datakomentar['foto']==NULL){
                                  ?>
                                    <img src="../../images/user.png" alt="avatar" class="avatarcomment" />
                                     <?php
                                          }else{
                                             ?>
                                            <img src="<?php echo $datakomentar['foto'];?>" class="avatarcomment">
                                      <?php
                                           }                             
                                       ?>
                              <h3><a class="author"><?php echo $datakomentar['nama_pengguna']?></a></h3>
                                <a class="date">
                                  <time><i class="fa fa-clock-o"></i> <?php time_since(strtotime($waktu)); echo time_since(strtotime($waktu));?></time>
                                </a>
                            </div>
                            <div class="content2">
                              <b><p><?php echo $datakomentar['isi_komentar']?></p></b>
                              
                            </div>
                            <p align="right">
                              <?php
                                  $nip=$datakomentar['nip'];
                                  if($nip==$_SESSION['nip']){
                                ?>
                            <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                       
                                    <a href="hapus_komentar.php?id_komentar=<?php echo $datakomentar['id_komentar'];?>&&id_forum=<?php echo $id_forum;?>" onclick ="if (!confirm('Apakah Anda yakin akan menghapus data komentar ini?')) return false;"><i class="fa fa-trash"> Hapus</i></a>
                                                           
                                   | 
                                   <?php
                                }
                              
                                ?>
                                   <?php
                                    $cekBaik="SELECT t_detail_komentar.id_komentar
                                        FROM t_detail_komentar
                                        WHERE t_detail_komentar.id_komentar = '$id_komentar'
                                        AND t_detail_komentar.nip = '$nip'
                                        AND t_detail_komentar.status= 'like'";
                                    $adaBaik=mysql_query($cekBaik) or die(mysql_error());

                                    if(mysql_num_rows($adaBaik)>0){
                                  ?>
                                  <a href="like.php?id_forum=<?php echo $id_forum?>&&id_komentar=<?php echo $id_komentar;?>&&status=<?php echo $status;?>"><i class="fa fa-thumbs-up" data-toggle="tooltip" title="suka"></i>&nbsp;&nbsp;<?php echo $datadetail['baik'];?>&nbsp;&nbsp;</a></p>
                                  <a href="like.php?id_forum=<?php echo $id_forum?>&&id_komentar=<?php echo $id_komentar;?>&&status=<?php echo $status;?>">&nbsp;</a>
                                  <?php
                                    }
                                    else {
                                  ?>
                                      <a href="like.php?id_forum=<?php echo $id_forum?>&&id_komentar=<?php echo $id_komentar;?>&&status=<?php echo $status;?>"><i class="fa fa-thumbs-o-up" data-toggle="tooltip" title="suka"></i>&nbsp;&nbsp;<?php echo $datadetail['buruk'];?>&nbsp;&nbsp;&nbsp;</a>
                                    <?php
                                    }
                                  ?>
                                
                          </article>
                        </section>    
                        <div class="ln_solid"></div>
                     
                                                    <?php
                                                   }
                                                   ?>
                                 
                             <div class="box-footer">
                  <form action="tambah_komentar_proses.php" method="post">
                    <div class="input-group">
                       <input type="text" name="nip" value="<?php echo $_SESSION['nip'];?>" style="display:none" >
                      <input type="text" name="id_forum" value="<?php echo $id_forum?>" style="display:none" >
                      <input type="text" name="isi_komentar" placeholder="Tambahkan komentar ..." class="form-control"/>
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Kirim</button>
                      </span>
                    </div >
                  </form>
                </div><!-- /.box-footer-->                     
               
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