<?php
    if($_SESSION['username']!=""){
        $link       = koneksi_db();
        $nip        = $_SESSION['nip'];
        $id_forum   = $_GET['id_forum'];
       
   
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
                         $queryforum =mysql_query("select t_forum.id_forum, t_forum.judul_forum, t_forum.nip, t_forum.isi_forum ,t_forum.tanggal_post, t_pengguna.nama_pengguna from t_forum, t_pengguna where t_forum.nip = t_pengguna.nip and id_forum = '$id_forum'",$link);
                        $data=mysql_fetch_array($queryforum);
                        ?>
                        <ul class="message">
                             
                                <li>
                                           
                                                            <div class="message_date">
                                                                <h5 class="date text-info pull-right"><?php echo $data['tanggal_post']?></h5>
                                                                
                                                            </div>
                                                            <div class="message_wrapper">

                                                                <h4 class="heading"><?php echo $data['nama_pengguna']?></h4>
                                                                <h2>Topik : <?php echo $data['judul_forum']?></h2>

                                                                 <br/>
                                                               <img src="../../images/user.png" class="avatar" alt="Avatar"></img>

                                                               <div class="direct-chat-text"><h5 class="message_wrapper"><?php echo $data['isi_forum']?></blockquote></h5>
                                                               </div>
                                                                
                                                                <br />
                                                               
                                                            </div>
                                </li>
                        </ul>
                        <hr />
                                
                        
                        <?php
                        $sql=mysql_query("SELECT t_komentar.`id_forum`, t_komentar.`nip`, t_komentar.`id_komentar`, t_komentar.`isi_komentar`, t_komentar.`tanggal_komentar`, t_pengguna.`nama_pengguna` FROM t_komentar, t_pengguna, t_forum WHERE t_forum.`id_forum` = t_komentar.`id_forum` AND t_komentar.`nip` = t_pengguna.`nip` AND t_komentar.`id_forum`= '$id_forum' ORDER BY t_komentar.tanggal_komentar",$link);

                           while($datakomentar=mysql_fetch_array($sql)){
                        ?>     
                                <ul class="message">
                                <li>
                                                           
                                                            <div class="message_date">

                                                                <h5 class="date text-info pull-right"><?php echo $datakomentar['tanggal_komentar']?></h5>
                                                                
                                                            </div>
                                                            <div class="message_wrapper">

                                                                <h4 class="heading"><?php echo $datakomentar['nama_pengguna']?></h4>
                                                                 <h2>Balas : <?php echo $data['judul_forum']?></h2>
                                                                

                                                                 <br/>
                                                               <img src="../../images/user.png" class="avatar" alt="Avatar"><h5 class="message_wrapper"><?php echo $datakomentar['isi_komentar']?></blockquote></h5></img>
                                                                
                                                                <br />
                                                               
                                                            </div>
                                </li>
                        </ul>                
                   <?php
               }
               ?>
                <div class="box-footer">
                  <form action="tambah_komentar_proses.php" method="post">
                    <div class="input-group">
                      <input type="text" name="nip" value="<?php echo $nip?>" style="display:none" >
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
?>