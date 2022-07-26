<?php
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    $nama_pengguna=$_SESSION['nama_pengguna'];
    
    $nip=$_SESSION['nip'];
    $query = mysql_query("select * from t_pengguna where nip='$nip'");
    $data = mysql_fetch_array($query);
?>    

<div class="profile_img">

                                            <!-- end of image cropping -->
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <div class="avatar-view" title="Change the avatar">
                                                    <?php
                                                        if($data['foto']==NULL){
                                                    ?>
                                                            <img src="../../images/user.png" alt="avatar" class="img-square img-responsive" />
                                                    <?php
                                                        }else{
                                                    ?>
                                                            <img src="<?php echo $data['foto'];?>" alt="avatar" class="img-square img-responsive"/>
                                                    <?php
                                                        }
                                                    
                                                    ?>
                        
                                                   
                                                </div>

                                                <!-- Cropping modal -->
                                                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <form class="avatar-form" action="edit_profil.php" enctype="multipart/form-data" method="post">
                                                                <div class="modal-header">
                                                                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                                    <h4 class="modal-title" id="avatar-modal-label">Ganti Foto Profil</h4>
                                                                    <input type="text" name="nip" style="display:none" value="<?php echo $nip?>" />
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="avatar-body">

                                                                        <!-- Upload image and data -->
                                                                        <div class="avatar-upload">

                                                                            <label for="foto">Local upload</label>
                                                                            <input name="foto" type="file" class="avatar-input" id="avatarInput" >
                                                                        </div>

                                                                        <!-- Crop and preview -->
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <div class="avatar-preview"></div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="avatar-preview preview-lg"></div>
                                                                                <div class="avatar-preview preview-md"></div>
                                                                                <div class="avatar-preview preview-sm"></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row avatar-btns">
                                                                          
                                                                            <div class="col-md-3">
                                                                                <button class="btn btn-primary" type="submit">Selesai</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->

                                                <!-- Loading state -->
                                                
                                            </div>
                                            <!-- end of image cropping -->

                                        </div>
                                        <h3><?php echo $data['nama_pengguna']; ?></h3>

                                       
                                       <ul class="list-unstyled user_data">
                                            <input type="text" name="nip" style="display:none" value="<?php echo $nip?>" />
                                            
                                            <li>
                                                <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $data['jabatan']; ?>
                                            </li>

                                            <li class="m-top-xs">
                                                <i class="fa fa-external-link user-profile-icon"></i> <?php echo $data['email']; ?>
                                                
                                            </li>
                                             <li class="m-top-xs">
                                                <i class="fa fa-home user-profile-icon"></i> <?php echo $data['alamat']; ?>
                                                
                                            </li>
                                             <li class="m-top-xs">
                                                <i class="fa fa-calendar user-profile-icon"></i> <?php echo $data['tanggal_lahir']; ?>
                                                
                                            </li>
                                            <br/>
                                             <a href="index.php?page=ubah_biodata_pengguna" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i> ubah Profil</a>
                                        </ul>

                                      

  <?php
    }
    else{
    header("Location:../../belum_login.php");
}
?>