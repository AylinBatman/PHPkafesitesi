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
                                            <input class="form-control" placeholder="MARKA Giriniz"<?=form_input(array('id'=>'p_brand','name'=>'p_brand')); ?>
                                       </div>
										<div class="form-group">
                                            <label>MODEL</label>
                                            <input class="form-control"  placeholder="MODEL giriniz" <?=form_input(array('id'=>'p_model','name'=>'p_model')); ?>
                                        </div>
										<div class="form-group">
                                            <label>ÜRETIM YILI</label>
                                            <input class="form-control"  placeholder="URETIM YILI Giriniz"<?=form_input(array('id'=>'p_date_product','name'=>'p_date_product')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>FİYAT</label>
                                            <input class="form-control" placeholder="FIYAT Giriniz" <?=form_input(array('id'=>'p_price','name'=>'p_price')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>SLIDER</label>
                                            <select id="p_slider" name="p_slider" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>										  
										<div class="form-group">
                                        <select id="p_image" name="p_image" class="form-control">
                                                <option value="NULL">Seçiniz</option>
                                                <option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                            
										<div class="form-group">
                                            <label>SLIDER-2</label>
                                            <select id="p_slider2" name="p_slider2" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>	
										<div class="form-group">
                                            <label>AÇIKLAMA</label>
                                            <textarea name="p_detail_exp" id="p_detail_exp" rows="10" cols="80">													
												</textarea>
												<script>
													// Replace the <textarea id="editor1"> with a CKEditor
													// instance, using default configuration.
													CKEDITOR.replace( 'p_detail_exp' );
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
