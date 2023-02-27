<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Your function Code 
?>


<?php  
include 'vt.php';
include 'function.php';

/************************************/

if (isset($_POST['yorumbirak'])) {
	$hseo=$_POST["h_seo"];
	if (isset($_SESSION["kul_id"])) {
		$srg=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id={$_SESSION['kul_id']}");
		$srg->execute();
		$kullcek=$srg->fetch(PDO::FETCH_ASSOC);	

		$y_isim=$kullcek["kul_ad"];
		$y_email=$kullcek["kul_mail"];
		$kulid=$_SESSION["kul_id"];

		$sorgu=$db->prepare("INSERT INTO yorumlar SET
			h_seo=:h_seo,
			y_isim=:y_isim,
			y_email=:y_email,
			y_site=:y_site,
			y_message=:y_message,
			kul_id=:kul_id

			");
		$sonuc=$sorgu->execute(array(
			'h_seo'=>guvenlik($_POST["h_seo"]),
			'y_isim'=>guvenlik($y_isim),
			'y_email'=>guvenlik($y_email),
			'y_site'=>guvenlik($_POST["y_site"]),
			'y_message'=>guvenlik($_POST["y_message"]),
			'kul_id'=>guvenlik($kulid)
		));
		if ($sonuc) 
		{
			header("Location:../single.php?seo=$hseo&durum=ok");
		} 
		else {
			header("Location:../single.php?seo=$hseo&durum=no");
		}
	}
	
	else {
		$sorgu=$db->prepare("INSERT INTO yorumlar SET
			h_seo=:h_seo,
			y_isim=:y_isim,
			y_email=:y_email,
			y_site=:y_site,
			y_message=:y_message


			");
		$sonuc=$sorgu->execute(array(
			'h_seo'=>guvenlik($_POST["h_seo"]),
			'y_isim'=>guvenlik($_POST["y_isim"]),
			'y_email'=>guvenlik($_POST["y_email"]),
			'y_site'=>guvenlik($_POST["y_site"]),
			'y_message'=>guvenlik($_POST["y_message"])
		));
		if ($sonuc) 
		{
			header("Location:../single.php?seo=$hseo&durum=ok");
		} 
		else {
			header("Location:../single.php?seo=$hseo&durum=no");
		}
	}

}
/********************************/
if (isset($_POST["profilguncelle"])) {
	$kulid=$_SESSION["kul_id"];
	$sorgu=$db->prepare("UPDATE kullanicilar SET
		kul_isim=:kul_isim,
		kul_ad=:kul_ad,
		kul_mail=:kul_mail,
		kul_adres=:kul_adres,
		kul_sifre=:kul_sifre
		WHERE kul_id=$kulid
		");
	$sonuc=$sorgu->execute(array(
		'kul_isim'=>guvenlik($_POST["kul_isim"]),
		'kul_ad'=>guvenlik($_POST["kul_ad"]),
		'kul_mail'=>guvenlik($_POST["kul_mail"]),
		'kul_adres'=>guvenlik($_POST["kul_adres"]),
		'kul_sifre'=>guvenlik(md5($_POST["kul_sifre"]))			
	));
	if ($sonuc) 
	{

		header("Location:../profile.php?id=$kulid&durum=ok");
	} 
	else {
		header("Location:../profile.php?id=$kulid&durum=no");
	}
}
/********************************/
if (isset($_POST['oturumacma'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => guvenlik($_POST['kul_mail']),
		'kul_sifre' => md5($_POST['kul_sifre'])
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location:../admin/login.php?durum=no");
	} else {
		$_SESSION['kul_ad'] = $kullanici['kul_ad'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];
		$_SESSION['kul_yetki'] = $kullanici['kul_yetki'];
		header("location:../admin/index.php?durum=ok");
	}
	exit;
}
/********************************/
if (isset($_POST['ayarkaydet'])) {
	$sorgu=$db->prepare("
		UPDATE ayarlar SET
		site_baslik=:site_baslik,
		site_aciklama=:site_aciklama,
		site_link=:site_link,
		site_sahip_mail=:site_sahip_mail,
		site_mail_sifre=:site_mail_sifre,
		site_mail_host=:site_mail_host,
		site_mail_sifre=:site_mail_sifre,
		site_mail_port=:site_mail_port,
		site_mail_mail=:site_mail_mail,
		site_konum=:site_konum,
		site_telefon=:site_telefon,
		footer_aciklama=:footer_aciklama,
		site_facebook=:site_facebook,
		site_twitter=:site_twitter,
		site_linkedin=:site_linkedin,
		site_instagram=:site_instagram,
		site_tanim=:site_tanim,
		site_keywords=:site_keywords,
		site_yazari=:site_yazari,
		github=:github,
		site_harita=:site_harita

		WHERE ayar_id=1
		");

	$sonuc=$sorgu->execute(array(
		'site_baslik'=>$_POST['site_baslik'],
		'site_aciklama'=>$_POST['site_aciklama'],
		'site_link'=>$_POST['site_link'],
		'site_sahip_mail'=>$_POST['site_sahip_mail'],
		'site_mail_sifre'=>$_POST['site_mail_sifre'],
		'site_mail_host'=>$_POST['site_mail_host'],
		'site_mail_sifre'=>$_POST['site_mail_sifre'],
		'site_mail_port'=>$_POST['site_mail_port'],
		'site_mail_mail'=>$_POST['site_mail_mail'],
		'site_konum'=>$_POST['site_konum'],
		'site_telefon'=>$_POST['site_telefon'],
		'footer_aciklama'=>$_POST['footer_aciklama'],
		'site_facebook'=>$_POST['site_facebook'],
		'site_twitter'=>$_POST['site_twitter'],
		'site_linkedin'=>$_POST['site_linkedin'],
		'site_instagram'=>$_POST['site_instagram'],
		'site_tanim'=>$_POST['site_tanim'],
		'site_keywords'=>$_POST['site_keywords'],
		'site_yazari'=>$_POST['site_yazari'],
		'github'=>$_POST['github'],
		'site_harita'=>$_POST['site_harita']
	));
	if ($_FILES['site_logo']['error']=="0") {
			$gecici_isim=$_FILES['site_logo']['tmp_name'];
			$dosya_ismi=rand(100000,999999).$_FILES['site_logo']['name'];
			move_uploaded_file($gecici_isim, "../images/logo/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE ayarlar SET
			site_logo=:site_logo 
			WHERE id=1
				");

			$sonuc=$sorgu->execute(array(
			'site_logo'=>$dosya_ismi
			));
		}
	if ($sonuc) {
		header("location:../admin/ayarlar.php?durum=ok");
	}
	else
	{
		header("location:../admin/ayarlar.php?durum=no");
	}
	exit;
}
/********************************/
if (isset($_POST['hakkimizdakaydet'])) {
	$sorgu=$db->prepare("
		UPDATE hakkimizda SET
		hakkimizda_icerik_tr=:hakkimizda_icerik_tr,
		hakkimizda_icerik_en=:hakkimizda_icerik_en
		WHERE hak_id=1
		");

	$sonuc=$sorgu->execute(array(
		'hakkimizda_icerik_tr'=>$_POST['hakkimizda_icerik_tr'],
		'hakkimizda_icerik_en'=>$_POST['hakkimizda_icerik_en']
	));
	if ($sonuc) {
		header("location:../admin/hakkimizda.php?durum=ok");
	}
	else
	{
		header("location:../admin/hakkimizda.php?durum=no");
	}
	exit;
}
/********************************/
if (isset($_POST['iletisimkaydet'])) {
	$sorgu=$db->prepare("
		UPDATE iletisim SET
		i_bas=:i_bas,
		i_alt_bas=:i_alt_bas,
		i_ack=:i_ack,
		i_adr=:i_adr,
		i_mail=:i_mail,
		i_cep=:i_cep
		WHERE i_id=1
		");

	$sonuc=$sorgu->execute(array(
		'i_bas'=>$_POST['i_bas'],
		'i_alt_bas'=>$_POST['i_alt_bas'],
		'i_ack'=>$_POST['i_ack'],
		'i_adr'=>$_POST['i_adr'],
		'i_mail'=>$_POST['i_mail'],
		'i_cep'=>$_POST['i_cep']
	));
	if ($sonuc) {
		header("location:../admin/iletisim.php?durum=ok");
	}
	else
	{
		header("location:../admin/iletisim.php?durum=no");
	}
	exit;
}
/********************************/
if (isset($_POST['kullaniciekle'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail");
	$sorgu->execute(array(
		'kul_mail'=> guvenlik($_POST['kul_mail'])
	));
	$sonuc=$sorgu->rowCount();
	if ($sonuc==0) 
	{
		$sorgu=$db->prepare("INSERT INTO kullanicilar SET
			kul_mail=:kul_mail,
			kul_ad=:kul_ad,
			kul_sifre=:kul_sifre,
			kul_dogum=:kul_dogum,
			kul_adres=:kul_adres,
			kul_soz=:kul_soz
			");
		$sonuc=$sorgu->execute(array(
			'kul_mail'=>guvenlik($_POST["kul_mail"]),
			'kul_ad'=>guvenlik($_POST["kul_ad"]),
			'kul_sifre'=>md5($_POST["kul_sifre"]),
			'kul_dogum'=>guvenlik($_POST["kul_dogum"]),
			'kul_adres'=>guvenlik($_POST["kul_adres"]),
			'kul_soz'=>guvenlik($_POST["kul_soz"])
		));
		if ($sonuc) 
		{
			header("Location:../admin/kullaniciekle.php?durum=ok");
		} 
		else {
			header("Location:../admin/kullaniciekle.php?durum=no");
		}
	}
	else 
	{
		header("Location:../admin/kullaniciekle.php?durum=kayitmevcut");
	}
	exit;
}
/********************************/
if (isset($_POST["kullaniciduzenle"])) {
	$kulid=$_POST["kul_id"];
	$sorgu=$db->prepare("UPDATE kullanicilar SET
		kul_isim=:kul_isim,
		kul_ad=:kul_ad,
		kul_mail=:kul_mail,
		kul_adres=:kul_adres,
		kul_sifre=:kul_sifre
		WHERE kul_id=$kulid
		");
	$sonuc=$sorgu->execute(array(
		'kul_isim'=>guvenlik($_POST["kul_isim"]),
		'kul_ad'=>guvenlik($_POST["kul_ad"]),
		'kul_mail'=>guvenlik($_POST["kul_mail"]),
		'kul_adres'=>guvenlik($_POST["kul_adres"]),
		'kul_sifre'=>guvenlik(md5($_POST["kul_sifre"]))			
	));
	if ($sonuc) 
	{

		header("Location:../admin/kullanicilar.php?durum=ok");
	} 
	else {
		header("Location:../admin/kullanicilar.php?durum=no");
	}
}
/********************************/
if (isset($_POST['kullanicisil'])) {
	$sorgu=$db->prepare("DELETE FROM kullanicilar WHERE kul_id=:kul_id");
	$sonuc=$sorgu->execute(array(
		'kul_id' =>$_POST['kul_id']
	));

	if ($sonuc) {
		header("location:../admin/kullanicilar.php?durum=ok");
	} else {
		header("location:../admin/kullanicilar.php?durum=no");
	}
}
/********************************/
if (isset($_POST['kullanicisil'])) {
	$sorgu=$db->prepare("DELETE FROM kullanicilar WHERE kul_id=:kul_id");
	$sonuc=$sorgu->execute(array(
		'kul_id' =>$_POST['kul_id']
	));

	if ($sonuc) {
		header("location:../admin/kullanicilar.php?durum=ok");
	} else {
		header("location:../admin/kullanicilar.php?durum=no");
	}
}
/********************************/
if (isset($_POST['bizesil'])) {
	$sorgu=$db->prepare("DELETE FROM bizeulas WHERE b_id=:b_id");
	$sonuc=$sorgu->execute(array(
		'b_id' =>$_POST['b_id']
	));

	if ($sonuc) {
		header("location:../admin/bizeulas.php?durum=ok");
	} else {
		header("location:../admin/bizeulas.php?durum=no");
	}
}
/********************************/
if (isset($_POST['yorumsil'])) {
	$sorgu=$db->prepare("DELETE FROM yorumlar WHERE yy_id=:yy_id");
	$sonuc=$sorgu->execute(array(
		'yy_id' =>$_POST['yy_id']
	));

	if ($sonuc) {
		header("location:../admin/yorumlar.php?durum=ok");
	} else {
		header("location:../admin/yorumlar.php?durum=no");
	}
}
/********************************/
if (isset($_POST['habersil'])) {
	$sorgu=$db->prepare("DELETE FROM haberler WHERE h_id=:h_id");
	$sonuc=$sorgu->execute(array(
		'h_id' =>$_POST['h_id']
	));

	if ($sonuc) {
		header("location:../admin/haberler.php?durum=ok");
	} else {
		header("location:../admin/haberler.php?durum=no");
	}
}
/********************************/
if (isset($_POST['habersil'])) {
	$sorgu=$db->prepare("DELETE FROM haberler WHERE h_id=:h_id");
	$sonuc=$sorgu->execute(array(
		'h_id' =>$_POST['h_id']
	));

	if ($sonuc) {
		header("location:../admin/haberler.php?durum=ok");
	} else {
		header("location:../admin/haberler.php?durum=no");
	}
}
/********************************/
if (isset($_POST['kategoriekle'])) {
	$sorgu=$db->prepare("INSERT INTO kategoriler SET k_isim=:k_isim, k_name=:k_name");
	$sonuc=$sorgu->execute(array(
		'k_isim' =>$_POST['k_isim'],
		'k_name' =>$_POST['k_name']
	));

	if ($sonuc) {
		header("location:../admin/kategoriler.php?durum=ok");
	} else {
		header("location:../admin/kategoriler.php?durum=no");
	}
}
/********************************/
if (isset($_POST['kategoriduzenle'])) {
	$sorgu=$db->prepare("UPDATE kategoriler SET k_isim=:k_isim, k_name=:k_name WHERE k_id={$_POST['k_id']}");
	$sonuc=$sorgu->execute(array(
		'k_isim' =>$_POST['k_isim'],
		'k_name' =>$_POST['k_name']
	));

	if ($sonuc) {
		header("location:../admin/kategoriler.php?durum=ok");
	} else {
		header("location:../admin/kategoriler.php?durum=no");
	}
}
/********************************/
if (isset($_POST['haberekle'])) {
	if ($_FILES['h_resim']['error']=="0") {
		if ($_FILES['h_resim']["type"]=="png" || "jpg") {
			if ($_FILES['h_resim']["size"]< 1024*1024) {
				$gecici_isim=$_FILES['h_resim']['tmp_name'];
				$dosya_ismi=rand(100000,999999).$_FILES['h_resim']['name'];
				move_uploaded_file($gecici_isim, "../news/$dosya_ismi");

				$sql=$db->prepare("SELECT * FROM kategoriler WHERE k_id={$_POST['k_id']}");
				$sql->execute();
				$sqlcek=$sql->fetch(PDO::FETCH_ASSOC);

				$sorgu=$db->prepare("
					INSERT INTO haberler SET
					h_baslik=:h_baslik,
					h_resim=:h_resim,
					h_metin=:h_metin,
					h_metin_ing=:h_metin_ing,
					h_yazar=:h_yazar,
					k_id=:k_id,
					k_isim=:k_isim,
					h_seo=:h_seo,
					k_onecikar=:k_onecikar

					");

				$sonuc=$sorgu->execute(array(
					'h_baslik'=>$_POST['h_baslik'],
					'h_resim'=>$dosya_ismi,
					'h_metin'=>$_POST['h_metin'],
					'h_metin_ing'=>$_POST['h_metin_ing'],
					'h_yazar'=>$_POST['h_yazar'],
					'k_id'=>$_POST['k_id'],
					'k_isim'=>$sqlcek['k_isim'],
					'h_seo'=>seo($_POST['h_baslik']),
					'k_onecikar'=>$_POST['k_onecikar']

				));

				if ($sonuc) {
					header("location:../admin/haberler.php?durum=ok");
				}
				else
				{
					header("location:../admin/haberler.php?durum=no");
				}
				exit;
			}
			else {
				header("Location:../admin/haberekle.php?durum=boyutbuyuk");
			}
		}
		else {
			header("Location:../admin/haberekle.php?durum=uzantiyanlis");
		}
	}
}
/********************************/
if (isset($_POST['haberiguncelle'])) {
	if ($_FILES['h_resim']['error']=="0") {
		if ($_FILES['h_resim']["type"]=="png" || "jpg") {
			if ($_FILES['h_resim']["size"]< 1024*1024) {
				$gecici_isim=$_FILES['h_resim']['tmp_name'];
				$dosya_ismi=rand(100000,999999).$_FILES['h_resim']['name'];
				move_uploaded_file($gecici_isim, "../news/$dosya_ismi");
				$sorgu=$db->prepare("
					UPDATE haberler SET
					h_resim=:h_resim 
					WHERE h_id={$_POST['h_id']}
					");
				$sonuc=$sorgu->execute(array(
					'h_resim'=>$dosya_ismi
				));

			}
			else {
				header("Location:../admin/haberekle.php?durum=boyutbuyuk");
			}
		}
		else {
			header("Location:../admin/haberekle.php?durum=uzantiyanlis");
		}

	}
	$sql=$db->prepare("SELECT * FROM kategoriler WHERE k_id={$_POST['k_id']}");
	$sql->execute();
	$sqlcek=$sql->fetch(PDO::FETCH_ASSOC);

	$sorgu=$db->prepare("
		UPDATE haberler SET
		h_baslik=:h_baslik,
		h_metin=:h_metin,
		h_metin_ing=:h_metin_ing,
		h_yazar=:h_yazar,
		k_id=:k_id,
		k_isim=:k_isim,
		h_seo=:h_seo,
		k_onecikar=:k_onecikar
		WHERE h_id={$_POST['h_id']}
		");

	$sonuc=$sorgu->execute(array(
		'h_baslik'=>$_POST['h_baslik'],
		'h_metin'=>$_POST['h_metin'],
		'h_metin_ing'=>$_POST['h_metin_ing'],
		'h_yazar'=>$_POST['h_yazar'],
		'k_id'=>$_POST['k_id'],
		'k_isim'=>$sqlcek['k_isim'],
		'h_seo'=>seo($_POST['h_baslik']),
		'k_onecikar'=>$_POST['k_onecikar']

	));
	if ($sonuc) {
		header("Location:../admin/haberler.php?durum=ok");
	}
	else
	{
		header("Location:../admin/haberler.php?durum=no");
	}
	exit;
}
/********************/
if (isset($_POST["bizeulas"])) {
			
				$sorgu=$db->prepare("
					INSERT INTO bizeulas SET
					b_isim=:b_isim,
					b_mail=:b_mail,
					b_konu=:b_konu,
					b_mesaj=:b_mesaj

					");

				$sonuc=$sorgu->execute(array(
					'b_isim'=>$_POST['b_isim'],
					'b_mail'=>$_POST['b_mail'],
					'b_konu'=>$_POST['b_konu'],
					'b_mesaj'=>$_POST['b_mesaj']
					

				));

				if ($sonuc) {
					
                               require 'PHPMailer/src/Exception.php';
                                require 'PHPMailer/src/PHPMailer.php';
                                require 'PHPMailer/src/SMTP.php';
                                
                                
                                $mail = new PHPMailer(true);
                                try {
                                //Server settings
                                $mail->CharSet = 'UTF-8';
                                $mail->SMTPDebug = 0; // debug on - off
                                $mail->isSMTP(); 
                                $mail->Host = 'ms4.guzel.net.tr'; // SMTP sunucusu örnek : mail.alanadi.com
                                $mail->SMTPAuth = true; // SMTP Doğrulama
                                $mail->Username = 'y'; // Mail kullanıcı adı
                                $mail->Password = 'jtddwpcezgvefakz'; // Mail şifresi
                                $mail->SMTPSecure = 'tls'; // Şifreleme
                                $mail->Port = 587; // SMTP Port
                                $mail->SMTPOptions = array(
                                'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                                )
                                );
                                
                                //Alıcılar
                                $mail->setfrom('uscewyazilim@gmail.com', 'Soru Sorun&Teklif Al');
                                $mail->addAddress('uscewyazilim@gmail.com');
                                $mail->addReplyTo('uscewyazilim@gmail.com');
                                //İçerik
                                $mail->isHTML(true);
                                $mail->Subject = 'a';
                                $mail->Body ="a";
                                


								$mail->send();
                                echo "Mesajınız İletildi --> ".$_POST['mail']."<br>";
								 header("location:iletisim.php?durum=ok");
                                } catch (Exception $e) {
                                echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
                                }
				}
				else
				{
					header("location:../admin/contact.php?durum=no");
				}
				exit;
					
								
					

}
?>