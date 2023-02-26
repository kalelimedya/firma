<?php 
	include "vt.php";
	function tarih()
	{
		date_default_timezone_set('Europe/Istanbul');
		echo date('d.m.Y');
	}
	function guvenlik($gelen)
	{
		$giden=strip_tags($gelen);
		$giden=htmlentities($giden);
		return $giden;
	}

	function oturumkontrol(){
		if (isset($_SESSION["kul_yetki"]) OR isset($_SESSION["kul_id"]) OR isset($_SESSION["kul_mail"])) {
				header("Location:index.php");
		} else {
			return TRUE;
		}
	}
	function oturumkontrol2(){
		if (isset($_SESSION["kul_yetki"]) OR isset($_SESSION["kul_id"]) OR isset($_SESSION["kul_mail"])) {
				return TRUE;
		} else {
			header("Location:login.php");
		}
	}
function seflink($text){
	$find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/");
	$degis = array("G","U","S","I","O","C","g","u","s","i","o","c");
	$text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/"," ",$text);
	$text = preg_replace($find,$degis,$text);
	$text = preg_replace("/ +/"," ",$text);
	$text = preg_replace("/ /","-",$text);
	$text = preg_replace("/\s/","",$text);
	$text = strtolower($text);
	$text = preg_replace("/^-/","",$text);
	$text = preg_replace("/-$/","",$text);
	return $text;
}
function adminnick(){
	if (isset($_SESSION["kul_yetki"]) OR isset($_SESSION["kul_id"]) OR isset($_SESSION["kul_mail"])) {
		echo $_SESSION["kul_ad"];
	}
}
function adminmail(){
	if (isset($_SESSION["kul_yetki"]) OR isset($_SESSION["kul_id"]) OR isset($_SESSION["kul_mail"])) {
		echo $_SESSION["kul_mail"];
	}
}
?>