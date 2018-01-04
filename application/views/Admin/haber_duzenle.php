<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Haber Duzenle</h1>
                    </div>
					<div class="panel-body">
					<div class="row">
                       <div class="col-lg-6">
							<form role="form" action="<?php echo base_url();?>admin/haber_guncelle/<?php echo $veri[0]->haber_id ?>" method="POST">  
								<div class="form-group">
                                            <label>BASLIK</label>
                                            <input class="form-control" id="haber_baslik" name="haber_baslik" value="<?php echo $veri[0]->haber_baslik ?>">
                                       </div>
								<div class="form-group">
									 <label><h4>HABER GIR<h4></label>
									<textarea name="haber_detay" id="haber_detay" rows="10" cols="80">	
										<?=$veri[0]->haber_detay?>									
									</textarea>
									<script>
									CKEDITOR.replace( 'haber_detay' );
									</script>                                               
								</div>  
								<button type="submit" value="haber_guncelle" class="btn btn-outline btn-primary btn-lg btn-block">KAYDET</button>
							   
							</form>	
					</div>
				</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>

</body>

</html>