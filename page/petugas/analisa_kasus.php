  <?php
  ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
  ?>
   
  <h2 class="StepTitle">Pencarian Solusi terhadap Penyakit yang dialami Sapi perah</h2>
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="analisa_kasus_proses.php" method="POST">

            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                    <li>
                        <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                    Langkah 1<br />
                    <small>Identitas</small>
                    <br/>
                    <small>Sapi</small>
                    
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
                  <h2><p>Identitas Sapi</p></h2>
                    <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_sapi">Nama Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="nama_sapi" name="nama_sapi" value="" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_telinga">No telinga sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <input type="text" id="no_telinga" name="no_telinga" value="" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jeniskelamin">Jenis kelamin Sapi <span class="required"></span>
                            </label>
                            <?php
                            $query=mysql_query("SELECT * FROM t_identitas_kasus");
                            $data=mysql_fetch_array($query);
                            ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <p>
                                <?php
                                    if($data['jenis_kelamin']=='jantan'){
                                ?>
                                     Jantan:
                                    <input type="radio" class="flat" name="jenis_kelamin" id="jenis_kelamin" value="jantan"/> 
                                    Betina:
                                    <input type="radio" class="flat" name="jenis_kelamin" id="jenis_kelamin" value="betina" checked=""/>

                             <?php
                                }
                            
                                else {
                                ?>
                                Jantan:
                                    <input type="radio" class="flat" name="jenis_kelamin" id="jenis_kelamin" value="jantan" checked=""/> 
                                    Betina:
                                    <input type="radio" class="flat" name="jenis_kelamin" id="jenis_kelamin" value="betina"/> 
                                <?php
                                }
                                ?>
                                </p>
                        </div>
                        </div>  
                        <div class="form-group">
                           
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur_sapi">Umur Sapi <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                               <input type="text" id="umur_sapi" name="umur_sapi" value="" class="form-control col-md-7 col-xs-12" oninvalid="check(this)" x-moz-errormessage="Field ini tidak boleh kosong" required="true">
                            </div>Tahun 
                        </div>
                       

                    </form>

                </div>
                <div id="step-2">
                     <h3><p>Gejala yang dialami</p></h3>
                        <div class="ln_solid"></div>
                <div class="form-group">
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala IN ('G001','G008','G009')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                  ?>
                  <div class="form-group">
                     <label>Kondisi Suhu tubuh Sapi</label>
                     <br>
                  <select class="control-label col-md-3 col-sm-3 col-xs-10" name="gejala[]" >

                    <option></option>
                    <?php
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                            <option value="<?php echo $id_atributgejala;?>"><?php echo $dataAtribut['nama_atributgejala'];?></option>  
                             <?php
                              }     
                              ?>
                    </select>
                        </div>   
                </div>

                 <div class="form-group">
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala IN ('G015','G017')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                  ?>
                  <div class="form-group">
                     <label>Kondisi Badan Sapi</label>
                     <br>
                  <select class="control-label col-md-3 col-sm-3 col-xs-10" name="gejala[]" >

                    <option></option>
                    <?php
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                            <option value="<?php echo $id_atributgejala;?>"><?php echo $dataAtribut['nama_atributgejala'];?></option>  
                             <?php
                              }     
                              ?>
                    </select>
                    </div>                
                    </div>

                     <div class="form-group">
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala IN ('G024','G025','G026')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                  ?>
                  <div class="form-group">
                     <label>Kondisi Kelenjar Air susu</label>
                     <br>
                  <select class="control-label col-md-3 col-sm-3 col-xs-10" name="gejala[]" >

                    <option></option>
                    <?php
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                            <option value="<?php echo $id_atributgejala;?>"><?php echo $dataAtribut['nama_atributgejala'];?></option>  
                             <?php
                              }     
                              ?>
                    </select>
                    </div>                
                    </div>

                     <div class="form-group">
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala IN ('G029','G030','G031')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                  ?>
                  <div class="form-group">
                     <label>Kondisi Mulut Sapi</label>
                     <br>
                  <select class="control-label col-md-3 col-sm-3 col-xs-10" name="gejala[]" >

                    <option></option>
                    <?php
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                            <option value="<?php echo $id_atributgejala;?>"><?php echo $dataAtribut['nama_atributgejala'];?></option>  
                             <?php
                              }     
                              ?>
                    </select>
                    </div>                
                    </div>

                     <div class="form-group">
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala IN ('G016','G033')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                  ?>
                  <div class="form-group">
                     <label>Kondisi Saat Mencret</label>
                     <br>
                  <select class="control-label col-md-3 col-sm-3 col-xs-10" name="gejala[]">

                    <option></option>
                    <?php
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                            <option value="<?php echo $id_atributgejala;?>"><?php echo $dataAtribut['nama_atributgejala'];?></option>  
                             <?php
                              }     
                              ?>
                    </select>
                    </div>                
                    </div>
                        
                <div class="form-group">
                   <label>Kondisi lainnya</label>
                   <br>
                  
                  <?php
                        
                        $sqlAtribut="SELECT * FROM t_atributgejala WHERE id_atributgejala NOT IN ('G001','G008','G009','G015','G017','G024','G025','G026','G029','G030','G031','G016','G033')";  
                        $resAtribut=mysql_query($sqlAtribut,$link);
                        $i=0;
                        while($dataAtribut=mysql_fetch_array($resAtribut)){
                            $i++;
                            $id_atributgejala = $dataAtribut['id_atributgejala'];
                    ?>
                        <div class="form-group">
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input input type="checkbox" class="js-switch" name="gejala[]" value="<?php echo $id_atributgejala;?>">
                                <?php echo $dataAtribut['nama_atributgejala'];?>
                            </div>
                        </div>
                              <?php
                              }     
                              ?>
                              
                </div>
                </div>
              </div>
                              

    </form>

 <?php
 
    }
    else{
    header("Location:../../belum_login.php");
}
ob_end_flush();
?>