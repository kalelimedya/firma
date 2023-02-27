<?php include 'header.php'; 
			$sorgu2=$db->prepare("SELECT * FROM haberler");
			$sorgu2->execute();
			$say=1;

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	  
	<!-- içerik -->
		<h4>Makaleler</h4>
		<?php if(@$_GET["durum"]=="ok") {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                      <div class="alert-icon">
                     <i class="icon-check"></i>
                      </div>
                      <div class="alert-message">
                        <span><strong>Başarılı!</strong> Veri Güncellenmesi başarılı.</span>
                      </div>
                  </div>
          <?php   } ?>
		<div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                	
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Gönderi Başlık</th>
                    <th scope="col">Gönderi Tarihi</th>
                    <th scope="col">Gönderi Resmi</th>
                    <th scope="col">Gönderi Metni</th>
                    <th scope="col">Gönderi Öne Çıkar</th>
                    <th scope="col"></th>
                  </tr>
               
                </thead>
                <tbody>
                	<?php while($sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr>
                    <th scope="row"><?php echo $say++; ?></th>
                    <td><?php echo $sorgucek["h_baslik"]; ?></td>
                    <td><?php echo $sorgucek["h_tarih"]; ?></td>
                    <td>
                      <img src="../images/blog/<?php echo $sorgucek['h_resim']; ?>">
                    </td>
                    <td><?php echo substr($sorgucek["h_metin"],0,20); ?></td>
                    <td>
                      <?php if(@$sorgucek["k_onecikar"]=="1") { ?>
                            <i class="fa fa-check"></i>
                      <?php } else { ?>
                            <i class="fa fa-times"></i>
                      <?php } ?>
                    </td>
                    <td>
                    	<div class="row">
                    		<div class="col-md-6">
                    			<form action="../yon/ajax.php" method="POST">
		                    		<input type="hidden" name="h_id" value="<?php echo $sorgucek['h_id']; ?>">
		                    		<button class="btn btn-light btn-block" name="habersil"><span style="font-weight:bold;">X</span></button>
		                    	</form>
                    		</div>
                    		<div class="col-md-6">
                    			<form action="haberduzenle.php" method="POST">
		                    		<input type="hidden" name="h_id" value="<?php echo $sorgucek['h_id']; ?>">
		                    		<button class="btn btn-light btn-block"><b><i class="zmdi zmdi-assignment"></i></b></button>
		                    	</form>
                    		</div>
                    	</div>
                    </td>
                  </tr>
           				 <?php } ?>
                </tbody>
              </table>
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