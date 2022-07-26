 <?php
 ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
<script>
    $(document).on('change' , '.checkbox-gejala' , function(){
        if(this.checked) {
           //$(this ~ "select" ).removeAttr("disabled");
           //alert(this.siblings("select").val());
           $(this).siblings("select").removeAttr("disabled");
        }
        else
        {
            //$(this ~ "select").attr("disabled",true);
            $(this).siblings("select").attr("disabled",true);
            $(this).siblings("select").prop("selectedIndex",0);

        }

    });
</script>
 <div class="page-title">
        <div class="title_left">
            <h3>
                    Tambah Daftar Kasus Penyakit
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="tambah_daftar_kasus_penyakit_proses.php" method="POST">

                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                        <ul class="wizard_steps">
                                            <li>
                                                <a href="#step-1">
                                                    <span class="step_no">1</span>
                                                    <span class="step_descr">
                                            Langkah 1<br />
                                            <small>Kasus</small>
                                            <br/>
                                            <small>Penyakit</small>
                                             <br/>
                                            <small>Baru</small>
                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-2">
                                                    <span class="step_no">2</span>
                                                    <span class="step_descr">
                                            Langkah 2<br />
                                            <small>Mengisi</small>
                                            <br/>
                                            <small>Gejala</small>
                                        
                                          
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="step-1">
                                            <form class="form-horizontal form-label-left">
                                                 <?php
                                                    $query=mysql_query("SELECT COUNT(id_kasus)+1
                                                                            FROM t_kasus
                                                                            WHERE id_kasus LIKE '%P%'");
                                                    $dataJumlah=mysql_fetch_array($query);

                                                    $atribut = $dataJumlah['COUNT(id_kasus)+1'];

                                                    if($atribut<10){
                                                        $nomor_urut = "00".$atribut;
                                                    }
                                                    else if(($atribut>9)&&($atribut<100)){
                                                        $nomor_urut = "0".$atribut;
                                                    }
                                                ?>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_penyakit">kode penyakit <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="id_penyakit" name="id_kasus" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo "P".$nomor_urut ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penyakit <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="nama_kasus" name="nama_kasus" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <h2 class="StepTitle">Gejala yang dialami</h2>
                                            <?php
                                                
                                                $sqlAtribut="SELECT t_atributgejala.`id_atributgejala`,
                                                t_atributgejala.`nama_atributgejala` from t_atributgejala ";  
                                                $resAtribut=mysql_query($sqlAtribut,$link);
                                                $i=0;
                                                while($dataAtribut=mysql_fetch_array($resAtribut)){
                                                    $i++;
                                                    $id_atributgejala = $dataAtribut['id_atributgejala'];
                                            ?>
                                                <div class="form-group">
                                                    
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                         <input type="checkbox" name="id_atributgejala_<?php echo $i;?>" value="<?php echo $id_atributgejala;?>" class="minimal-red checkbox-gejala" if()/>
                                                        <?php echo $dataAtribut['nama_atributgejala'];?>
                                                        <select class="form-control" disabled name="bobot">
                                                            <option>pilih bobot</option>
                                                            <option>1 (biasa)</option>
                                                            <option>3 (sedang)</option>
                                                            <option>5 (penting)</option>    
                                                        </select>
                                                    </div>
                                                </div>
                                                      <?php
                                                      }     
                                                      ?>
                                               
                                                

                                            </form>

                                        </div>
                                        <div id="step-2">
                                             <h3><p>Solusi</p></h3>
                                                
                                        <div class="form-group">
                                          
                                          <textarea class="form-control textarea" name="solusi" rows="5" required placeholder="Isi Solusi"></textarea>
                                        </div>
                                    </div>
                                    <!-- End SmartWizard Content -->
                                    <input type="text" name="jumlah" value="<?php echo $i?>" style="display:none">

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