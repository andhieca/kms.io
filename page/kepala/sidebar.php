<?php
ob_start();
   //session_start();
   if($_SESSION['nip']!=""){
   $link=koneksi_db();
   $nip = $_SESSION['nip'];
    $Nama  = $_SESSION['nama_pengguna']; 
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
                                                                    <img src="../../images/user.png" alt="..." class="img-circle profile_img" width="200" height="55"/>
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
                    <li/>
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                       <div class="menu_section">
                       
                      
                         
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Beranda </a>  
                                </li>
                                <li><a><i class="fa fa-database"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                       
                                        <li><a href="index.php?page=daftar_kategori"> Data Kategori </a>  
                                </li>
                                        <li><a href="index.php?page=daftar_atribut_gejala">Data Gejala</a>
                                        </li>
                                        <li><a href="index.php?page=daftar_kasus_penyakit">Data Penyakit </a>
                                       
                                    </ul>
                                </li>
                                <li><a href="index.php?page=daftar_dokumen"><i class="fa fa-folder"></i> manajemen dokumen </a>  
                                </li>
                              
                                <li><a href="index.php?page=lesson_learned"><i class="fa fa-users"></i> Lesson Learned </a>  
                                </li>
                                <li><a href="index.php?page=forum"><i class="fa fa-wechat"></i> Forum </a>  
                                </li>

                                <li><a><i class="fa fa-search"></i> Pusat pengetahuan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                       
                                        <li><a href="index.php?page=analisa_kasus"> Analisa Kasus </a></li>
                                        <li><a href="index.php?page=daftar_revisi_penyakit">Daftar Revisi</a></li>
                                       
                                       
                                    </ul>
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
ob_end_flush();
?>