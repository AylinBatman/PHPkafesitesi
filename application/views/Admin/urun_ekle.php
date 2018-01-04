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
													
									 <form role="form" action="urun_kaydet" method="POST">                                        
                                        <div class="form-group">
                                            <label>MARKA</label>
                                            <input class="form-control" placeholder="MARKA Giriniz"<?=form_input(array('id'=>'urun_marka','name'=>'urun_marka')); ?>
                                       </div>
										<div class="form-group">
                                            <label>MODEL</label>
                                            <input class="form-control"  placeholder="MODEL giriniz" <?=form_input(array('id'=>'urun_model','name'=>'urun_model')); ?>
                                        </div>
										<div class="form-group">
                                            <label>ÜRETIM YILI</label>
                                            <input class="form-control"  placeholder="URETIM YILI Giriniz"<?=form_input(array('id'=>'urun_uretimtarihi','name'=>'urun_uretimtarihi')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>FİYAT</label>
                                            <input class="form-control" placeholder="FIYAT Giriniz" <?=form_input(array('id'=>'urun_fiyat','name'=>'urun_fiyat')); ?>
                                        </div> 
										<div class="form-group">
                                            <label>GİRİŞ EKRANI SLIDER</label>
                                            <select id="urun_slider" name="urun_slider" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>ÜRÜN TÜRÜ</label>
                                            <select id="urun_tipi" name="urun_tipi" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Kahvaltı">Kahvaltı</option>
                                                <option value="Tatlılar">Tatlılar</option>
                                                <option value="Soğuk İçecekler">Soğuk İçecekler</option>                                                
                                                <option value="Sıcak İçecekler">Sıcak İçecekler</option>
                                                <option value="Aparatifler">Aparatif Ürünler</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>SALON SAYFASI SLIDER</label>
                                            <select id="urun_slider2" name="urun_slider2" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>	
										<div class="form-group">
                                            <label>ANASAYFADA GÖZÜKSÜN MÜ?(En Fazla 5 Ürün)</label>
                                            <select id="urun_ekran" name="urun_ekran" class="form-control">
                                                <option value="NULL">Seçiniz</option>
												<option value="Evet">EVET</option>
                                                <option value="Hayir">HAYIR</option>
                                            </select>
                                        </div>	
										<div class="form-group">
                                            <label>AÇIKLAMA</label>
                                            <textarea name="urun_detay" id="urun_detay" rows="10" cols="80">													
												</textarea>
												<script>
                                                    CKEDITOR.replace( 'urun_detay' );
                                                </script>
                                        </div>  										
										<br>								
										<button type="submit" value="urun_kaydet" class="btn btn-default">KAYDET</button>
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
