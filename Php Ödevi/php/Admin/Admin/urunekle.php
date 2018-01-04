<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ÜRÜN EKLEME</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Ürün Kayit Formu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
													
									 <form role="form" action="urun_ekle" method="POST">                                        
                                        <div class="form-group">
                                            <label>MARKA</label>
                                            <input class="form-control" placeholder="MARKA Giriniz"<?=form_input(array('id'=>'marka','name'=>'marka')); ?>
                                       </div>
										<div class="form-group">
                                            <label>MODEL</label>
                                            <input class="form-control"  placeholder="MODEL giriniz" <?=form_input(array('id'=>'model','name'=>'model')); ?>
                                        </div>
										<div class="form-group">
                                            <label>ÜRETIM YILI</label>
                                            <input class="form-control"  placeholder="URETIM YILI Giriniz"<?=form_input(array('id'=>'urt_yili','name'=>'urt_yili')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>FİYAT</label>
                                            <input class="form-control" placeholder="FIYAT Giriniz" <?=form_input(array('id'=>'fiyat','name'=>'fiyat')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>SLIDER</label>
                                            <select id="slider" name="slider" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>										  
										<div class="form-group">
                                            <label>ÜRÜN TÜRÜ</label>
                                            <input class="form-control"  placeholder="ÜRÜN TÜRÜ Giriniz" <?=form_input(array('id'=>'uruntur','name'=>'uruntur')); ?>
                                        </div>  
										<div class="form-group">
                                            <label>SLIDER-2</label>
                                            <select id="slider2" name="slider2" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>	
										<div class="form-group">
                                            <label>AÇIKLAMA</label>
                                            <textarea name="aciklama" id="aciklama" rows="10" cols="80">													
												</textarea>
												<script>
													// Replace the <textarea id="editor1"> with a CKEditor
													// instance, using default configuration.
													CKEDITOR.replace( 'aciklama' );
												</script>
                                        </div>  										
										<div>
                                            <label>Dosya SeÇ</label>
                                            <input type="file">
                                        </div>	<br>								
										<button type="submit" value="urun_ekle" class="btn btn-default">KAYDET</button>
                                        <button type="reset" class="btn btn-default">TEMIZLE</button>									
                                     </form>
									<!---->
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
	 <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>

</html>
