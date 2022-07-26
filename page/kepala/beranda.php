
<script src="../../chart/highcharts.js" type="text/javascript"></script>
    <!-- bootstrap progress js -->
<?php
ob_start();
    if($_SESSION['nip']!=""){
    $link = koneksi_db();
?> 
        <center><div>
            <h1><li class="fa fa-user"></li><h1>
            <h1>Selamat datang di halaman <?php echo $_SESSION['level'];?> !</h1>  
            <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Grafik Dokumen kesehatan hewan</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="container" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
            <div class="col-md-12">
	
				<script src="../../js/highcharts.js"></script>
						 <script type="text/javascript">
					var chart1; // globally available
					$(document).ready(function() {
						  chart1 = new Highcharts.Chart({
							 chart: {
								renderTo: 'container',
								type: 'column'
							 },   
							 title: {
								text: 'Grafik Dokumen'
							 },
							 xAxis: {
								categories: ['Dokumen bagian kesehatan hewan']
							 },
							 yAxis: {
								title: {
								   text: 'Jumlah Dokumen'
								}
							 },
								  series:             
								[
								<?php 
										$sqlStatistik="SELECT count(t_dokumen.`id_dokumen`), t_kategori.`nama_kategori`
											from t_dokumen, t_kategori
											where t_dokumen.`id_kategori` = t_kategori.`id_kategori`
											group by t_dokumen.`id_kategori`";
										$resStatistik=mysql_query($sqlStatistik,$link);
										$banyakrecordStatistik=mysql_num_rows($resStatistik);
											if($banyakrecordStatistik>0){
												while($dataStatistik=mysql_fetch_array($resStatistik)){
											 ?>
												  {
													  name: '<?php echo $dataStatistik['nama_kategori'];?>',
													  data: [<?php echo $dataStatistik['count(t_dokumen.`id_dokumen`)'];?>]
												  },
									  
											<?php
												}
											
											}
											else{
												?>
												</script>
												
												<br><br>
												<div class="alert alert-warning alert-dismissable">
														<i class="fa fa-warning"></i>
														<b>Informasi:</b> Data tidak ditemukan.
												</div>
												
					 <script type="text/javascript">
						<?php
					}
					?>
								]
						  });
					   });	
					</script>
						
						
					</div>

<div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Grafik aktivitas forum kesehatan hewan</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="container2" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
            <div class="col-md-12">
	
				<script src="../../js/highcharts.js"></script>
						 <script type="text/javascript">
					var chart1; // globally available
					$(document).ready(function() {
						  chart1 = new Highcharts.Chart({
							 chart: {
								renderTo: 'container2',
								type: 'column'
							 },   
							 title: {
								text: 'Grafik aktivitas forum'
							 },
							 xAxis: {
								categories: ['forum bagian kesehatan hewan']
							 },
							 yAxis: {
								title: {
								   text: 'Jumlah forum'
								}
							 },
								  series:             
								[
								<?php 
										$sqlStatistik="select count(t_forum.`nip`),
															t_pengguna.`jabatan`
														from t_pengguna,
															t_forum,
															t_komentar
														where t_pengguna.`nip` = t_forum.`nip`
														and t_forum.`id_forum` = t_komentar.`id_forum`
														group by t_pengguna.`jabatan`";
										$resStatistik=mysql_query($sqlStatistik,$link);
										$banyakrecordStatistik=mysql_num_rows($resStatistik);
											if($banyakrecordStatistik>0){
												while($dataStatistik=mysql_fetch_array($resStatistik)){
											 ?>
												  {
													  name: '<?php echo $dataStatistik['jabatan'];?>',
													  data: [<?php echo $dataStatistik['count(t_forum.`nip`)'];?>]
												  },
									  
											<?php
												}
											
											}
											else{
												?>
												</script>
												
												<br><br>
												<div class="alert alert-warning alert-dismissable">
														<i class="fa fa-warning"></i>
														<b>Informasi:</b> Data tidak ditemukan.
												</div>
												
					 <script type="text/javascript">
						<?php
					}
					?>
								]
						  });
					   });	
					</script>
						
						
					</div>


            </div>

            <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Grafik aktivitas lesson learned</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="container3" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>
            <div class="col-md-12">
	
				<script src="../../js/highcharts.js"></script>
						 <script type="text/javascript">
					var chart1; // globally available
					$(document).ready(function() {
						  chart1 = new Highcharts.Chart({
							 chart: {
								renderTo: 'container3',
								type: 'column'
							 },   
							 title: {
								text: 'Grafik aktivitas lesson learned'
							 },
							 xAxis: {
								categories: ['forum bagian kesehatan hewan']
							 },
							 yAxis: {
								title: {
								   text: 'Jumlah lesson learned'
								}
							 },
								  series:             
								[
								<?php 
										$sqlStatistik="select count(t_lesson_learned.`nip`),
															t_pengguna.`jabatan`
														from t_pengguna,
															t_lesson_learned
															
														where t_pengguna.`nip` = t_lesson_learned.`nip`
														group by t_pengguna.`nama_pengguna`";
										$resStatistik=mysql_query($sqlStatistik,$link);
										$banyakrecordStatistik=mysql_num_rows($resStatistik);
											if($banyakrecordStatistik>0){
												while($dataStatistik=mysql_fetch_array($resStatistik)){
											 ?>
												  {
													  name: '<?php echo $dataStatistik['jabatan'];?>',
													  data: [<?php echo $dataStatistik['count(t_lesson_learned.`nip`)'];?>]
												  },
									  
											<?php
												}
											
											}
											else{
												?>
												</script>
												
												<br><br>
												<div class="alert alert-warning alert-dismissable">
														<i class="fa fa-warning"></i>
														<b>Informasi:</b> Data tidak ditemukan.
												</div>
												
					 <script type="text/javascript">
						<?php
					}
					?>
								]
						  });
					   });	
					</script>
						
						
					</div>


            </div>
          
            </center>

           


       
<?php
    }
    else{
    header("Location:../../belum_login.php");
}
ob_end_flush();
?>