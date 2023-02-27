<?php include 'header.php'; 
      $sorgu2=$db->prepare("SELECT * FROM haberler WHERE h_id={$_POST['h_id']}");
      $sorgu2->execute();
      $sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC);

      $sorgu3=$db->prepare("SELECT *
      FROM kategoriler RIGHT JOIN haberler
      ON h_id = {$_POST['h_id']}");
      $sorgu3->execute();
      $sorgucek2=$sorgu3->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	  
	<!-- içerik -->
		<h3>Ayarlar</h3>
		<div class="row">
			<div class="col-md-12">
          <?php if(@$_GET["durum"]=="ok") {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                      <div class="alert-icon">
                     <i class="icon-check"></i>
                      </div>
                      <div class="alert-message">
                        <span><strong>Başarılı!</strong> Veri güncellemesi başarılı.</span>
                      </div>
                  </div>
          <?php   } ?>
					<div class="card">
           <div class="card-body">
           <div class="card-title">Gönderi Düzenle</div>
           <hr>
           <form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Haber Resmi:</label>
            <input type="file" name="h_resim" class="form-control" id="input-1">
           </div>
           <div class="form-group">
            <img src="../images/blog/<?php echo $sorgucek['h_resim'] ?>" class="img-fluid">
           </div>
           <div class="form-group">
            <label for="input-2">Haber Başlığı</label>
            <input type="text" class="form-control" id="input-2" name="h_baslik" required="" value="<?php echo $sorgucek['h_baslik'] ?>">
           </div>
           <div class="form-group">
            <label for="input-3">Haber Tarihi</label>
            <input type="date" class="form-control" id="input-3" name="h_tarih" value="<?php echo $sorgucek['h_tarih'] ?>">
           </div>
           <div class="form-group">
            <label for="input-4">Haber Metni</label>
            <textarea class="form-control" id="input-4" name="h_metin"><?php echo $sorgucek['h_metin'] ?></textarea>
           </div>
           <div class="form-group">
            <label for="input-5">Haber Seo</label>
            <input type="text" class="form-control" id="input-5" name="h_seo" value="<?php echo $sorgucek['h_seo'] ?>">
           </div>
           <div class="form-group">
            <label for="input-6">Yorum Sayısı</label>
            <input type="text" class="form-control" readonly="" id="input-6" readonly="" name="h_yorum" value="<?php echo $sorgucek['h_yorum'] ?>">
           </div>
           <div class="form-group">
            <label for="input-7">Kategori</label>
            <select name="k_id" class="form-control">
              <?php if($sorgucek2) ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-8">Site Mail Şifre</label>
            <input type="password" class="form-control" id="input-8" placeholder="Site Mail Şifre" name="site_mail_sifre" value="<?php echo $sorgucek['site_mail_sifre'] ?>">
           </div>
          <div class="form-group">
            <label for="input-9">Site Konum</label>
            <input type="text" class="form-control" id="input-9" placeholder="Site Konum" name="site_konum" value="<?php echo $sorgucek['site_konum'] ?>">
           </div>
           <div class="form-group">
            <label for="input-10">Site Telefon</label>
            <input type="text" class="form-control" id="input-10" placeholder="Site Telefon" name="site_telefon" value="<?php echo $sorgucek['site_telefon'] ?>">
           </div>
           <div class="form-group">
            <label for="input-11">Site Admin Footer</label>
            <input type="text" class="form-control" id="input-11" placeholder="Site Admin Footer Açıklama" name="footer_aciklama" value="<?php echo $sorgucek['footer_aciklama'] ?>">
           </div>
           <div class="form-group">
            <label for="input-12">Site Facebook</label>
            <input type="text" class="form-control" id="input-12" placeholder="Site Facebook" name="site_facebook" value="<?php echo $sorgucek['site_facebook'] ?>">
           </div>
            <div class="form-group">
            <label for="input-13">Site Twitter</label>
            <input type="text" class="form-control" id="input-13" placeholder="Site Twitter" name="site_twitter" value="<?php echo $sorgucek['site_twitter'] ?>">
           </div>
            <div class="form-group">
            <label for="input-14">Site Linkedin</label>
            <input type="text" class="form-control" id="input-14" placeholder="Site Linkedin" name="site_linkedin" value="<?php echo $sorgucek['site_linkedin'] ?>">
           </div>
           <div class="form-group">
            <label for="input-15">Site Instagram</label>
            <input type="text" class="form-control" id="input-15" placeholder="Site Instagram" name="site_instagram" value="<?php echo $sorgucek['site_instagram'] ?>">
           </div>
           <div class="form-group">
            <label for="input-16">Site Tanıtımı</label>
            <input type="text" class="form-control" id="input-16" placeholder="Site Tanıtımı" name="site_tanim" value="<?php echo $sorgucek['site_tanim'] ?>">
           </div>
           <div class="form-group">
            <label for="input-17">Site Keywords</label>
            <input type="text" class="form-control" id="input-17" placeholder="Site Keywords" name="site_keywords" value="<?php echo $sorgucek['site_keywords'] ?>">
           </div>
           <div class="form-group">
            <label for="input-18">Site Yazarı</label>
            <input type="text" class="form-control" id="input-18" placeholder="Site Yazarı" name="site_yazari" value="<?php echo $sorgucek['site_yazari'] ?>">
           </div>
            <div class="form-group">
            <label for="input-19">Site Harita Linki</label>
            <input type="text" class="form-control" id="input-19" placeholder="Site Harita Linki" name="site_harita" value="<?php echo $sorgucek['site_harita'] ?>">
           </div>
            <div class="form-group">
            <label for="input-20">Github</label>
            <input type="text" class="form-control" id="input-20" placeholder="Github" name="github" value="<?php echo $sorgucek['github'] ?>">
           </div> 
           <div class="form-group py-2">
            <!--
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked="">
            <label for="user-checkbox1">I Agree Terms &amp; Conditions</label>  
            </div>
            -->
           </div>
           <div class="form-group">
            <button type="submit" name="ayarkaydet" class="btn btn-light btn-block px-5"> Kaydet</button>
          </div>
        </form>
         </div>
         </div>
			</div>
		</div>


<!-- içerik bitiş-->
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	<?php include 'footer.php'; ?>