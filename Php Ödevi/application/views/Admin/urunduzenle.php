<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ÜRÜN GÜNCELLEME</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Ürün Güncelleme Formu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
													
									 <form role="form" action="<?php echo base_url();?>admin/urun_guncelle/<?php echo $veri[0]->p_id ?>" method="POST">                                        
                                        <div class="form-group">
                                            <label>MARKA</label>
                                            <input class="form-control" placeholder="MARKA Giriniz" value="<?php echo $veri[0]->p_brand ?>" id="p_brand" name="p_brand">
                                       </div>
										<div class="form-group">
                                            <label>MODEL</label>
                                            <input class="form-control"  placeholder="MODEL adresi giriniz" value="<?php echo $veri[0]->p_model ?>" id="p_model" name="p_model">
                                        </div>
										<div class="form-group">
                                            <label>ÜRETIM YILI</label>
                                            <input class="form-control"  placeholder="URETIM YILI Giriniz" value="<?php echo $veri[0]->p_date_produc ?>" id="p_date_produc" name="p_date_produc">
                                        </div> 
										<div class="form-group">
                                            <label>FİYAT</label>
                                            <input class="form-control" placeholder="FIYAT Giriniz" value="<?php echo $veri[0]->p_price ?>" id="p_price" name="p_price">
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

                                            
                                        </div>  
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
												<?=$veri[0]->p_detail_exp?>
												</textarea>
												<script>
													// Replace the <textarea id="editor1"> with a CKEditor
													// instance, using default configuration.
													CKEDITOR.replace( 'p_detail_exp' );
												</script>                                               
                                        </div>  										
										<br>								
										<button type="submit" value="urun_guncelle"  class="btn btn-default">KAYDET</button>
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
<script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>

</html>
