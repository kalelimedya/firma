<?php include 'header.php'; 
			$sorgu2=$db->prepare("SELECT * FROM bizeulas");
			$sorgu2->execute();
			$say=1;

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	  
	<!-- içerik -->
		<h4>Bize Ulaş</h4>
		<?php if(@$_GET["durum"]=="ok") {?>
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
		<div class="card">
            <div class="card-body">
              <h5 class="card-title">İletişim</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                	
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">İsim</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Konu</th>
                    <th scope="col">Mesaj</th>
                    <th scope="col"></th>
                  </tr>
               
                </thead>
                <tbody>
                	<?php while($sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr>
                    <th scope="row"><?php echo $say++; ?></th>
                    <td><?php echo $sorgucek["b_isim"]; ?></td>
                    <td><?php echo $sorgucek["b_mail"]; ?></td>
                    <td><?php echo $sorgucek["b_konu"]; ?></td>
                    <td><?php echo substr($sorgucek["b_mesaj"],0,50); ?></td>
                    <td>
                    	<div class="row">
                    		<div class="col-md-6">
                    			<form action="../yon/ajax.php" method="POST">
		                    		<input type="hidden" name="b_id" value="<?php echo $sorgucek['b_id']; ?>">
		                    		<button class="btn btn-light btn-block" name="bizesil"><span style="font-weight:bold;">X</span></button>
		                    	</form>
                    		</div>
                    		<div class="col-md-6">
                    			<form action="bizegor.php" method="POST">
		                    		<input type="hidden" name="b_id" value="<?php echo $sorgucek['b_id']; ?>">
		                    		<button class="btn btn-light btn-block"><b><i class="zmdi zmdi-assignment-account"></i> Mesajı Gör</b></button>
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