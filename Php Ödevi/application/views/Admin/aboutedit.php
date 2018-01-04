<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HAKKIMIZDA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i> Firma Bilgilerimiz
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
									<form role="form" action="<?php echo base_url();?>admin/about_guncelle/<?php echo $veri[0]->Id ?>" method="POST">                                        
                                        <div class="form-group">
                                            <label>FiRMA ADI</label>
                                            <input class="form-control" id="firmadi" name="firmadi" value="<?php echo $veri[0]->Firmaadi ?>" >
                                       </div>
										<div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="email" name="email" value="<?php echo $veri[0]->email ?>" >
                                        </div>
										<div class="form-group">
                                            <label>TEL</label>
                                            <input class="form-control" id="tel" name="tel" value="<?php echo $veri[0]->Tel?>" >
                                        </div>
										<div class="form-group">
                                            <label>ADRES</label>
                                            <input class="form-control" id="adres" name="adres" value="<?php echo $veri[0]->Adres?>" >
                                        </div>
										<div class="form-group">
                                            <label>FAX</label>
                                            <input class="form-control" id="fax" name="fax" value="<?php echo $veri[0]->Fax?>" >
                                        </div>
										<div class="form-group">
										 <label>MiSYON</label>
										<textarea name="misyon" id="misyon" value="<?php echo $veri[0]->Misyon?>" rows="5" cols="100">		<?=$veri[0]->Misyon?>											
										</textarea>										                                              
										</div>  
										<label>ViZYON</label>
										<textarea name="vizyon" id="vizyon" value="<?php echo $veri[0]->Vizyon?>" rows="5" cols="100">			<?=$veri[0]->Vizyon?>										
										</textarea>										                                              
										</div>  
										<label>GUZEL SOZ</label>
										<textarea name="soz" id="soz" value="<?php echo $veri[0]->Soz?>" rows="5" cols="100">			<?=$veri[0]->Soz?>										
										</textarea>										                                              
										</div>  
										
                                        <button type="submit" value="about_guncelle" class="btn btn-default">KAYDET</button>
                                        <button type="reset" class="btn btn-default">TEMIZLE</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    </div>
	<script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>

</html>
