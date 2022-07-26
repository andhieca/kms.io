<?php
ob_start();
    //session_start();
    if($_SESSION['nip']!=""){
    $link=koneksi_db();
    $nip = $_SESSION['nip'];
    $Nama  = $_SESSION['nama_pengguna']; 
 
    $queryPhoto=mysql_query("SELECT foto
                        FROM t_pengguna
                        WHERE nip = '$nip'
                        LIMIT 1");
    $data=mysql_fetch_array($queryPhoto);
?>
         <!-- Top navigation menu -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                       <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   <span class="badge bg-green"><?php echo $Nama;?></span> <?php
                                                                if($data['foto']==NULL){
                                                            ?>
                                                                    <img src="../../images/user.png" alt=""/>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                   <img src="<?php echo $data['foto'];?>"  alt="">
                                                            <?php
                                                                }
                                                            ?>
                                                            <?php echo $_SESSION['level'];?>
                                    <span class=" fa fa-angle-down"></span>

                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="index.php?page=profile">  Profile</a>
                                    </li>
                                    <li><a href="../../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
              </div>
            <!-- /Top navigation menu -->
<?php
}

else {
header("Location:../../belum_login.php");
}
ob_end_flush();
?>