<?php include 'header.php'; 
			$sorgu2=$db->prepare("SELECT * FROM bizeulas WHERE b_id={$_POST['b_id']}");
			$sorgu2->execute();
			$sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC);

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	  
	<!-- içerik -->
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
           <div class="card-title">Bize Ulaş</div>
           <hr>
           <form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">İsim:</label>
            <input type="text" name="b_isim" class="form-control" id="input-1" value="<?php echo $sorgucek['b_isim'] ?>" readonly>
           </div>
           <div class="form-group">
           	   <label for="input-2">Mail Adresi</label>
            		<input type="text" name="b_mail" class="form-control" id="input-2" value="<?php echo $sorgucek['b_mail'] ?>" readonly="">
           </div>
           <div class="form-group">
           	   <label for="input-3">Mail Adresi</label>
            		<input type="text" name="b_konu" class="form-control" id="input-3" value="<?php echo $sorgucek['b_konu'] ?>" readonly="">
           </div>
            <div class="form-group">
           	   <label for="input-4">Mesaj</label>
           	   <textarea class="form-control" name="b_mesaj" id="input-4" readonly=""><?php echo $sorgucek['b_konu'] ?></textarea>
           </div>
           <div class="form-group py-2">
            <!--
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked="">
            <label for="user-checkbox1">I Agree Terms &amp; Conditions</label>  
            </div>
            -->
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