 <?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Ubah Daftar Kategori
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                        <?php
                            $id_kategori = $_GET['id_kategori'];
                            $query=mysql_query("SELECT * FROM t_kategori WHERE id_kategori='$id_kategori'");
                            $data=mysql_fetch_array($query);
                        ?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="ubah_daftar_kategori_proses.php" method="POST">
                                        <input type="text" id="id_kategori" name="id_kategori" required="required" style="display:none" class="form-control col-md-7 col-xs-12" value="<?php echo $data['id_kategori'];?>">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori" >Nama Kategori<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="nama_kategori" name="nama_kategori" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data['nama_kategori'];?>">
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=daftar_kategori"<button type="reset" class="btn btn-primary">Batal</button></a>
                                                <a href="index.php?page=ubah_kategori_sukses"><button type ="submit" class="btn btn-success">Simpan</button></a>
                                            </div>
                                        </div>

                                    </form>
                    
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