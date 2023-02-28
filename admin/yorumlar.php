<?php include 'header.php'; 
			$sorgu2=$db->prepare("SELECT * FROM yorumlar");
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
            <?php if(@$_GET["durum"]=="no") {?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                      <div class="alert-icon">
                     <i class="icon-trash"></i>
                      </div>
                      <div class="alert-message">
                        <span><strong>Başarılı!</strong> Veri Silinimi başarılı.</span>
                      </div>
                  </div>
          <?php   } ?>
          <?php if(@$_GET["durum"]=="sil") {?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                      <div class="alert-icon">
                     <i class="icon-trash"></i>
                      </div>
                      <div class="alert-message">
                        <span><strong>Başarılı!</strong> Veri Silinimi başarılı.</span>
                      </div>
                  </div>
          <?php   } ?>
            <div class="card-body">
              <h5 class="card-title">Blog</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                	
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Yorum Gönderi Başlığı</th>
                    <th scope="col">Kullanıcı ID</th>
                    <th scope="col">Yorum Aktifliği</th>
                    <th scope="col">Yorum Mail</th>
                    <th scope="col">Yorum Mesaj</th>
                    <th scope="col"></th>
                  </tr>
               
                </thead>
                <tbody>
                	<?php while($sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr>
                    <th scope="row"><?php echo $say++; ?></th>
                    <td><?php echo $sorgucek["h_seo"]; ?></td>
                    <td><?php echo $sorgucek["kul_id"]; ?></td>
                    <td>
                      <?php if(@$sorgucek["y_aktif"]==1) { ?>
                          Aktif
                      <?php } else { ?>
                          Aktif Değil
                      <?php } ?>

                    </td>
                    <td><?php echo $sorgucek["y_email"] ?></td>
                    <td>
                        <?php echo $sorgucek["y_message"] ?>
                    </td>
                    <td>
                    	<div class="row">
                    		<div class="col-md-6">
                    			<form action="../yon/ajax.php" method="POST">
		                    		<input type="hidden" name="yy_id" value="<?php echo $sorgucek['yy_id']; ?>">
		                    		<button class="btn btn-light btn-block" name="yorumsil"><span style="font-weight:bold;">X</span></button>
		                    	</form>
                    		</div>
                    		<div class="col-md-6">
                    			<?php if(@$sorgucek["y_aktif"]==0) { ?>
                                  <form action="../yon/ajax.php" method="POST">
                                    <input type="hidden" name="yy_id" value="<?php echo $sorgucek['yy_id']; ?>">
                                    <button class="btn btn-light btn-block" name="yorumonay" value="1"><b><i class="zmdi zmdi-assignment"></i> Onay</b></button>
                                  </form>
                          <?php } else { ?>
                            <form action="../yon/ajax.php" method="POST">
                              <input type="hidden" name="yy_id" value="<?php echo $sorgucek['yy_id']; ?>">
                                    <button class="btn btn-light btn-block" name="yorumaski" value="1"><b><i class="zmdi zmdi-assignment"></i> Askıya Al</b></button>
                                  </form>
                          <?php } ?>
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