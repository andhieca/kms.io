 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
    $nip    = $_SESSION['nip'];
?> 
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Unggah Dokumen
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="unggah_dokumen_proses.php" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <input type="text" name="nip" style="display:none" value="<?php echo $nip?>" />
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_dokumen">nama dokumen <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">   
                                                <input type="text" id="nama_dokumen" name="nama_dokumen" required="required" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_kategori">nama kategori <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="id_kategori" id="id_kategori" required x-moz-errormessage="pilih kategori terlebih dahulu!">
                                            <option selected="selected" disabled="disabled" value="">Pilih Kategori Dokumen...</option>
                                            <?php
                                                $res=mysql_query("SELECT * FROM t_kategori");
                                                while($data=mysql_fetch_array($res)){
                                                        echo "<option value=\"".$data['id_kategori']."\">".$data['nama_kategori']."</option>";
                                                }
                                            ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Dokumen pengetahuan</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="fileUpload btn-file btn btn-warning">
                                                        <i class="fa fa-file-o"></i> Pilih file <input id="uploadBtn" type="file" class="upload" name="dokumen_pengetahuan" />
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" type="text" id="uploadFile"  readonly />
                                                </div>
                                            </div>
                                           

                                        </div>

                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="index.php?page=daftar_dokumen"<button type="reset" class="btn btn-danger">Batal</button></a>
                                                <button type ="submit" class="btn btn-success" onclick=" return confirm('Apakah anda yakin akan mengunggah dokumen ini?')">Unggah</button></a>
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
ob_end_flush();
?>