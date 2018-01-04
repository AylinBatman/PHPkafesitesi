<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
            
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">HABER EKLE</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            HABER BILGISI
                        </div>
                        <div class="panel-body">
                            YUKLEMIS OLDUGUNUZ HABERDE EGER YANLISLIK VARSA HABER LiSTESNDEN SiLEBiLiR VEYA HABERi TEKRAR DUZENLEYEBiLiRSiNiZ.
                        </div>
                        <div class="panel-footer">
                            ENSA HABER
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>													
                </div>
				<div class="panel-body">
                     <div class="row">
                       <div class="col-lg-6">
						<form role="form" action="yeni_haberekle" method="POST">  
									<div class="form-group">
                                            <label>BASLIK</label>
                                            <input class="form-control" id="title" name="title" placeholder="Başlık Giriniz">
                                       </div>
						<div class="form-group">
							 <label><h4>HABER GIR<h4></label>
							<textarea name="haber" id="haber" rows="10" cols="80">													
							</textarea>
							<script>
							CKEDITOR.replace( 'haber' );
							</script>                                               
						</div>  
						<button type="submit" value="yeni_haberekle" class="btn btn-outline btn-primary btn-lg btn-block">KAYDET</button>
                       
					</form>	
					</div>
				  </div>
				</div>					
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
</div>
   
    <!-- /#wrapper -->

	<script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
