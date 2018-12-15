<?php


	class Voucher extends Simple{
	
	
		function getVoucher(){
		
		
			print("OK Voucher");
			#alaMaKota();
		
		}
		function alaMaKota(){
		
				print('ala ma kota');
		
		
		}
	
	
	}
	
	$myObj = new Voucher();
	$myObj->getVoucher();


?>