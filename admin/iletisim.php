<?php include 'header.php'; 
      $sorgu2=$db->prepare("SELECT * FROM iletisim");
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
            <label for="input-3">İletişim Başlık</label>
            <input type="text" name="i_bas" class="form-control" id="input-3" value="<?php echo $sorgucek['i_bas'] ?>">
           </div>
           <div class="form-group">
            <label for="input-5">İletişim Açıklama</label>
            <input type="text" name="i_ack" class="form-control" id="input-5" value="<?php echo $sorgucek['i_ack'] ?>">
           </div>
            <div class="form-group">
            <label for="input-6">İletişim Mail</label>
            <input type="email" name="i_mail" class="form-control" id="input-6" value="<?php echo $sorgucek['i_mail'] ?>">
           </div>
           <div class="form-group">
            <label for="input-7">İletişim Cep</label>
            <input type="text" name="i_cep" class="form-control" id="input-7" value="<?php echo $sorgucek['i_cep'] ?>">
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
            <button type="submit" name="iletisimkaydet" class="btn btn-light btn-block px-5"> Kaydet</button>
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