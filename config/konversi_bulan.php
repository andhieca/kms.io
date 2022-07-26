<?php
function konversi_bulan($inputanBulan){
	switch($inputanBulan){
		case "01" : $namaBulan = " Januari ";
		break;
		case "02" : $namaBulan = " Februari ";
		break;
		case "03" : $namaBulan = " Maret ";
		break;
		case "04" : $namaBulan = " April ";
		break;
		case "05" : $namaBulan = " Mei ";
		break;
		case "06" : $namaBulan = " Juni ";
		break;
		case "07" : $namaBulan = " Juli ";
		break;
		case "08" : $namaBulan = " Agustus ";
		break;
		case "09" : $namaBulan = " September ";
		break;
		case "10" : $namaBulan = " Oktober ";
		break;
		case "11" : $namaBulan = " November ";
		break;
		case "12" : $namaBulan = " Desember ";
		break;
		default:
		break;
	}
	return $namaBulan;
}
?>
