 <?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
    $nip   = $_SESSION['nip'];
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Tambah Diskusi Forum
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_forum_proses.php" method="POST">
                                        <?php
                                            $queryIDForum=mysql_query("SELECT MAX(t_forum.id_forum)+1
                                                                        FROM t_forum");
                                            $dataIDForum=mysql_fetch_array($queryIDForum);

                                            $id_forum = $dataIDForum['MAX(t_forum.id_forum)+1'];
                                        ?>
                                            <input type="text" id="nip" name="nip" required="required" style="display:none" value="<?php echo $nip ?>">
                                            <input type="text" id="id_forum" name="id_forum" required="required" style="display:none"  value="<?php echo $id_forum ?>">
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topik">Topik Forum <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="judul_forum" name="judul_forum" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isi">Isi pembahasan <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="message" required="required" class="form-control" name="isi_forum" data-parsley-trigger="keyup"></textarea>
                                            </div>
                                        </div>
                                        

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=forum"<button type="reset" class="btn btn-primary">Batal</button></a>
                                                <a href="index.php?page=tambah_forum_sukses"><button type ="submit" class="btn btn-success">Simpan</button></a>
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