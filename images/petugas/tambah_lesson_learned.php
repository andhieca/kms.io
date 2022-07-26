 <?php
    if($_SESSION['username']!=""){
    $link = koneksi_db();
    $nip = $_SESSION['nip'];
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Buat Topik Lesson Learned
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_lesson_learned_proses.php" method="POST">
                                        <input type="text" id="nip" name="nip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nip;?>" style="display:none">
                                        <div class="form-group">
                                            <label for="judul">Judul <span class="required"></span>
                                            </label>
                                            <div >
                                                <input type="text" id="judul" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <br>
                                        
                                                
                                        <div class="form-group">
                                          <label>Isi Topik Lesson Learned</label>
                                          <textarea class="form-control textarea" name="isi" rows="5" required placeholder="Isi Topik"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=lesson_learned"<button type="reset" class="btn btn-primary">Batal</button></a>
                                                <a href="index.php?page=tambah_lesson_learned_sukses"><button type ="submit" class="btn btn-success">Simpan</button></a>
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