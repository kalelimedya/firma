<?php include 'header.php'; ?>
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
           <div class="card-title">Ayarlar</div>
           <hr>
           <form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Site Logo</label>
            <input type="file" name="site_logo" class="form-control" id="input-1">
            <label for="input-1">Site Başlığı</label>
            <input type="text" name="site_baslik" class="form-control" id="input-1" placeholder="Site Başlığını Giriniz" value="<?php echo $ayarcek['site_baslik'] ?>" required>
           </div>
           <div class="form-group">
            <label for="input-2">Site Açıklaması</label>
            <input type="text" class="form-control" id="input-2" placeholder="Site Açıklaması" name="site_aciklama" required="" value="<?php echo $ayarcek['site_aciklama'] ?>">
           </div>
           <div class="form-group">
            <label for="input-3">Site Link</label>
            <input type="text" class="form-control" id="input-3" placeholder="Site Linki" name="site_link" value="<?php echo $ayarcek['site_link'] ?>">
           </div>
           <div class="form-group">
            <label for="input-4">Site Sahibinin Mail Adresi</label>
            <input type="email" class="form-control" id="input-4" placeholder="Site Sahibinin Mail Adresini Giriniz" name="site_sahip_mail" value="<?php echo $ayarcek['site_sahip_mail'] ?>">
           </div>
           <div class="form-group">
            <label for="input-5">Site Mail Host</label>
            <input type="text" class="form-control" id="input-5" placeholder="Site Mail Host" name="site_mail_host" value="<?php echo $ayarcek['site_mail_host'] ?>">
           </div>
           <div class="form-group">
            <label for="input-6">Site Mail Mail</label>
            <input type="text" class="form-control" id="input-6" placeholder="Site Mail Mail" name="site_mail_mail" value="<?php echo $ayarcek['site_mail_mail'] ?>">
           </div>
           <div class="form-group">
            <label for="input-7">Site Mail Port</label>
            <input type="text" class="form-control" id="input-7" placeholder="Site Mail Port" name="site_mail_port" value="<?php echo $ayarcek['site_mail_port'] ?>">
           </div>
           <div class="form-group">
            <label for="input-8">Site Mail Şifre</label>
            <input type="password" class="form-control" id="input-8" placeholder="Site Mail Şifre" name="site_mail_sifre" value="<?php echo $ayarcek['site_mail_sifre'] ?>">
           </div>
          <div class="form-group">
            <label for="input-9">Site Konum</label>
            <input type="text" class="form-control" id="input-9" placeholder="Site Konum" name="site_konum" value="<?php echo $ayarcek['site_konum'] ?>">
           </div>
           <div class="form-group">
            <label for="input-10">Site Telefon</label>
            <input type="text" class="form-control" id="input-10" placeholder="Site Telefon" name="site_telefon" value="<?php echo $ayarcek['site_telefon'] ?>">
           </div>
           <div class="form-group">
            <label for="input-11">Site Admin Footer</label>
            <input type="text" class="form-control" id="input-11" placeholder="Site Admin Footer Açıklama" name="footer_aciklama" value="<?php echo $ayarcek['footer_aciklama'] ?>">
           </div>
           <div class="form-group">
            <label for="input-12">Site Facebook</label>
            <input type="text" class="form-control" id="input-12" placeholder="Site Facebook" name="site_facebook" value="<?php echo $ayarcek['site_facebook'] ?>">
           </div>
            <div class="form-group">
            <label for="input-13">Site Twitter</label>
            <input type="text" class="form-control" id="input-13" placeholder="Site Twitter" name="site_twitter" value="<?php echo $ayarcek['site_twitter'] ?>">
           </div>
            <div class="form-group">
            <label for="input-14">Site Linkedin</label>
            <input type="text" class="form-control" id="input-14" placeholder="Site Linkedin" name="site_linkedin" value="<?php echo $ayarcek['site_linkedin'] ?>">
           </div>
           <div class="form-group">
            <label for="input-15">Site Instagram</label>
            <input type="text" class="form-control" id="input-15" placeholder="Site Instagram" name="site_instagram" value="<?php echo $ayarcek['site_instagram'] ?>">
           </div>
           <div class="form-group">
            <label for="input-16">Site Tanıtımı</label>
            <input type="text" class="form-control" id="input-16" placeholder="Site Tanıtımı" name="site_tanim" value="<?php echo $ayarcek['site_tanim'] ?>">
           </div>
           <div class="form-group">
            <label for="input-17">Site Keywords</label>
            <input type="text" class="form-control" id="input-17" placeholder="Site Keywords" name="site_keywords" value="<?php echo $ayarcek['site_keywords'] ?>">
           </div>
           <div class="form-group">
            <label for="input-18">Site Yazarı</label>
            <input type="text" class="form-control" id="input-18" placeholder="Site Yazarı" name="site_yazari" value="<?php echo $ayarcek['site_yazari'] ?>">
           </div>
            <div class="form-group">
            <label for="input-19">Site Harita Linki</label>
            <input type="text" class="form-control" id="input-19" placeholder="Site Harita Linki" name="site_harita" value="<?php echo $ayarcek['site_harita'] ?>">
           </div>
            <div class="form-group">
            <label for="input-20">Github</label>
            <input type="text" class="form-control" id="input-20" placeholder="Github" name="github" value="<?php echo $ayarcek['github'] ?>">
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