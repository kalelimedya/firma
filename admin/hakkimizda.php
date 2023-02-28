<?php include 'header.php'; 
      $sorgu2=$db->prepare("SELECT * FROM hakkimizda");
      $sorgu2->execute();
      $sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC);
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
           <div class="card-title">Ayarlar</div>
           <hr>
           <form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Hakkımızda Resim</label>
            <input type="file" name="hak_resim1" class="form-control" id="input-1">
            <img src="../images/about/<?php echo $sorgucek['hak_resim1'] ?>" class="img-fluid">
           </div>
           <div class="form-group">
            <label for="input-2">Hakkımızda Resim 2</label>
            <input type="file" name="hak_resim2" class="form-control" id="input-2">
            <img src="../images/about/<?php echo $sorgucek['hak_resim2'] ?>" class="img-fluid">
           </div>
           <div class="form-group">
            <label for="input-3">Hakkımızda İçerik</label>
            <input type="text" name="hakkimizda_icerik" class="form-control" id="input-3" value="<?php echo $sorgucek['hakkimizda_icerik'] ?>">
           </div>
           <div class="form-group">
            <label for="input-4">Hakkımızda Başlık</label>
            <input type="text" name="hak_baslik" class="form-control" id="input-4" value="<?php echo $sorgucek['hak_baslik'] ?>">
           </div>
           <div class="form-group">
            <label for="input-5">Hakkımızda Üst Başlık</label>
            <input type="text" name="hak_baslik_ust" class="form-control" id="input-5" value="<?php echo $sorgucek['hak_baslik_ust'] ?>">
           </div>
            <div class="form-group">
            <label for="input-6">Hakkımızda Sayı-1</label>
            <input type="number" name="hak_say_1" class="form-control" id="input-6" value="<?php echo $sorgucek['hak_say_1'] ?>">
           </div>
           <div class="form-group">
            <label for="input-7">Hakkımızda Sayı-2</label>
            <input type="number" name="hak_say_2" class="form-control" id="input-7" value="<?php echo $sorgucek['hak_say_2'] ?>">
           </div>
           <div class="form-group">
            <label for="input-8">Hakkımızda Sayı-3</label>
            <input type="number" name="hak_say_3" class="form-control" id="input-8" value="<?php echo $sorgucek['hak_say_3'] ?>">
           </div>
           <div class="form-group">
            <label for="input-8">Hakkımızda Sayı-4</label>
            <input type="number" name="hak_say_4" class="form-control" id="input-8" value="<?php echo $sorgucek['hak_say_4'] ?>">
           </div>
           <div class="form-group">
            <label for="input-9">Hakkımızda Sayı Başlığı</label>
            <input type="text" name="hak_say_bas" class="form-control" id="input-9" value="<?php echo $sorgucek['hak_say_bas'] ?>">
           </div>
           <div class="form-group">
            <label for="input-10">Hakkımızda Sayı Yazı</label>
            <input type="text" name="hak_say_yazi" class="form-control" id="input-10" value="<?php echo $sorgucek['hak_say_yazi'] ?>">
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
            <button type="submit" name="hakkimizdakaydet" class="btn btn-light btn-block px-5"> Kaydet</button>
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