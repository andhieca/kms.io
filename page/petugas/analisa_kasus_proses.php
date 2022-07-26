
<?php
error_reporting(0);
	include "../../config/koneksi.php";
	///VARIABEL	
	
		$link = koneksi_db();
		$nama_sapi=$_POST['nama_sapi'];	
		$no_telinga=$_POST['no_telinga'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$umur_sapi=$_POST['umur_sapi'];
		

		//query identitas sapi
		$querysapi = mysql_query("INSERT INTO  t_analisa_kasus (id_analisa_kasus, jenis_kelamin, umur_sapi, nama_sapi, no_telinga) 
		VALUES (NULL,'$jenis_kelamin','$umur_sapi','$nama_sapi','$no_telinga')",$link);
		mysql_query($querysapi);

	if(isset($_POST['gejala']))
	{
 		$link = koneksi_db();
 		

 		//$gejala = array();
		$gejala = $_POST['gejala']; 
		//$gejala['bobot'] = array_fill(0, count($gejala['id_gejala']), 0);
	
		$i=0;
		$query = "SELECT DISTINCT t_detail_kasus.id_kasus FROM t_detail_kasus JOIN t_kasus ON t_detail_kasus.id_kasus = t_kasus.`id_kasus` WHERE (id_atributgejala = '".$gejala[$i]."'";
		$i=1;
		while($i<count($gejala))
		{
			$query .= "OR id_atributgejala = '".$gejala[$i]."'";
			$i++;	
		}

		$query.= " AND status_cbr = 'Retain')";

		$result=mysql_query($query,$link);

		$nilaiTerbesar = 0;
		$idTerbesar = "";
		while($row=mysql_fetch_array($result))
		{
			$nilai=0;
			$totalbobot=0;
			

			//array_push($penyakit, $row['id_kasus']);		
			$query = "SELECT * FROM t_detail_kasus WHERE id_kasus = '".$row['id_kasus']."'";

			$result2=mysql_query($query,$link);


			while($gej=mysql_fetch_array($result2))
			{
				$totalbobot+=$gej['bobot'];
				if(in_array($gej['id_atributgejala'],$gejala))
				{
					$nilai += $gej['bobot'];
					//$tempbobot[array_search($gej['id_atributgejala'], $gejala['id_gejala'])]=$gej['bobot'];
				}	
			}
			$nilai/=$totalbobot;
			if($nilaiTerbesar<$nilai)
			{
				$nilaiTerbesar = $nilai;
				$idTerbesar = $row['id_kasus'];
				//$gejala['bobot'] = $tempbobot;
			}	
			//echo $row['id_kasus']." : ".$nilai."<br>";
		
		}

		 
		if($nilaiTerbesar > 0.2)
		{	
			
			
			    
			header("location:index.php?page=hasil_analisis_kasus&&id_kasus=$idTerbesar&&nilaiTerbesar=$nilaiTerbesar");
		}
		else
		{
			echo "Penyakit tidak ditemukan!";
			$nama_kasus = $row['nama_kasus'];
			$solusi = $row['solusi'];
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
                 
			$id_revisi =  "P".$nomor_urut;
			$query = mysql_query("INSERT INTO  t_kasus (id_kasus, nip, nama_kasus, solusi, status_cbr) VALUES ('$id_revisi','0903001','Tidak ada kasus','Belum ada Solusi','Revisi' )",$link);
			foreach($gejala as $gej)
			{
				$myqryInsertDetailKasus="INSERT INTO t_detail_kasus
									VALUES(NULL,'$id_revisi','$gej','1')";
				mysql_query($myqryInsertDetailKasus) or die(mysql_error());
			}
		}
		
	}

?>
