<?php
   //session_start();
   if($_SESSION['username']!=""){
   $link=koneksi_db();
?>
<?php
    require_once "../../config/koneksi.php";
    $queryPhoto=mysql_query("SELECT foto
                        FROM t_pengguna
                        WHERE nip = '$nip'
                        LIMIT 1");
    $data=mysql_fetch_array($queryPhoto);
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i><span> KUD Sarwa Mukti </span></a>          
        </div>
            <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                              <?php
                                                                if($data['foto']==NULL){
                                                            ?>
                                                                    <img src="../../images/user.png" alt="avatar" class="img-circle profile_img" width="200" height="55" />
                                                            <?php
                                                                }else{
                                                            ?>
                                                                   <img src="<?php echo $data['foto'];?>"  alt="..." class="img-circle profile_img" width="200" height="55">
                                                            <?php
                                                                }
                                                            
                                                            ?>
                            
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2><?php echo $_SESSION['nama_pengguna'];?></h2>
                        </div>
                    </div>
                    <!-- sidebar menu -->  
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                       <div class="menu_section">
                         <h3><?php echo $_SESSION['username'];?></h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Beranda </a>  
                                </li>
                                <li><a href="index.php?page=daftar_dokumen"><i class="fa fa-folder"></i> manajemen dokumen </a>  
                                </li>
                                <li><a href="index.php?page=lesson_learned"><i class="fa fa-users"></i> Lesson Learned </a>  
                                </li>
                                <li><a href="index.php?page=forum"><i class="fa fa-wechat"></i> Forum </a>  
                                </li>
                                <li><a><i class="fa fa-database"></i> Pusat pengetahuan </a>  
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
    </div>
</div>                          
<?php
}
else {
header("Location:../../belum_login.php");
}
?>