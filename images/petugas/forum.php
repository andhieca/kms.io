<?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
    $nip = $_SESSION['nip'];
    $Nama  = $_SESSION['nama_pengguna'];

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
                                     
                                        $tampil=mysql_query("select t_forum.id_forum, t_forum.judul_forum, t_forum.nip, t_forum.isi_forum ,t_forum.tanggal_post, t_pengguna.nama_pengguna from t_forum, t_pengguna where t_forum.nip = t_pengguna.nip ORDER BY t_forum.tanggal_post DESC",$link);
                    
                                        $banyakrecord=mysql_num_rows($tampil);
                                        if($banyakrecord>0){
                                    ?>
                                <tr class="headings">
                                    <th>No </th>
                                    <th><center>Topik Pembahasan</center> </th>
                                 

                                    
                                </tr>
                            </thead>  

                            <tbody>
                          
                            <?php
                                        $i=0; 
                                        while($data=mysql_fetch_array($tampil)){ 
                                        $i++;?>                        
                                <tr class="even pointer">
                                    <?php
                                    $id_forum = $data['id_forum'];
                                    ?>
                                    <td>
                                        <?php echo $i; ?>

                                    </td>
                                    <td> 
                                       <ul class="messages">
                                                        <li>
                                                            <img src="../../images/user.png" class="avatar" alt="Avatar">
                                                            <div class="message_date">
                                                                <h5 class="date text-info"><?php echo $data['tanggal_post']?></h5>
                                                                
                                                            </div>
                                                            <div class="message_wrapper">
                                                                <h4 class="heading"><?php echo $data['nama_pengguna']?></h4>
                                                                 <a href="index.php?page=detail_forum&&id_forum=<?php echo $id_forum?>"><blockquote class="message"><?php echo $data['judul_forum']?></blockquote></a>
                                                                 <br/>
                                                                    <h5 class="message_wrapper"><?php echo $data['isi_forum']?></h5>
                                                                <br />
                                                                <p class="url">   
                                                                </p>
                                                            </div>
                                                        </li>
                                        </ul>                                               
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
?>