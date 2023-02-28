<?php include 'header.php';
      $sorgu2=$db->prepare("SELECT * FROM haberler WHERE h_id={$_POST['h_id']}");
      $sorgu2->execute();
      $sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC);

      $sorgu4=$db->prepare("SELECT * FROM kategoriler");
      $sorgu4->execute();
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
             <?php while($sorgucek3=$sorgu4->fetch(PDO::FETCH_ASSOC)) { ?>
                  
                  <?php if($sorgucek["k_id"]==$sorgucek3["k_id"]) { ?>
                        <option value="<?php echo $sorgucek3['k_id'] ?>" selected><?php echo $sorgucek3['k_isim'] ?></option>
                  <?php } ?>
                  <option value="<?php echo $sorgucek3['k_id'] ?>"><?php echo $sorgucek3['k_isim'] ?></option>
           <?php } ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-8">Öne Çıkar</label>
            <select name="k_onecikar" class="form-control">
              <?php if($sorgucek["k_onecikar"]==1) { ?>
                  <option selected="" value="1">Öne Çıkarılmıştır</option>
                  <option value="0">Öne Çıkarılmamıştır</option>
              <?php } else {?>
                  <option value="1">Öne Çıkarılmıştır</option>
                  <option selected="" value="0">Öne Çıkarılmamıştır</option>
              <?php } ?>
            </select>
           </div>
            <div class="form-group">
            <label for="input-9">Haber Yazarı</label>
            <input type="text" class="form-control" id="input-9" name="h_yazar" value="<?php echo $sorgucek['h_yazar'] ?>">
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
            <input type="hidden" name="h_id" value="<?php echo $sorgucek['h_id'] ?>">
            <button type="submit" name="haberguncelle" class="btn btn-light btn-block px-5"> Kaydet</button>
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