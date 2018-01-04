<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Üye Güncelle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Üye Güncelleme Formu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
									<form role="form" action="<?php echo base_url();?>admin/uye_guncelle/<?php echo $veri[0]->k_id ?>" method="POST">                                        
                                        <div class="form-group">
                                            <label>iSiM</label>
                                            <input class="form-control" id="adsoy" name="adsoy" value="<?php echo $veri[0]->adsoy ?>" placeholder="Ad Soyad Giriniz">
                                       </div>
										<div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="email" name="email" value="<?php echo $veri[0]->email ?>" placeholder="Email adresi giriniz">
                                        </div>
										<div class="form-group">
                                            <label>ŞİFRE</label>
                                            <input class="form-control" id="sifre" name="sifre" value="<?php echo $veri[0]->sifre?>" placeholder="Sifre Giriniz">
                                        </div> 
										<div class="form-group">
                                            <label>CİNSiYET</label>
                                            <input class="form-control" id="cinsiyet" name="cinsiyet" value="<?php echo $veri[0]->cinsiyet ?>" placeholder="cinsiyet Giriniz">
                                        </div>
										<div class="form-group">
                                            <label>Yetki</label>
                                            <select id="yetki" name="yetki" class="form-control">
												<option value="NULL">Seçiniz</option>
												<option value="admin">Admin</option>
                                                <option value="kullanici">Kullanıcı</option>
                                            </select>
                                        </div>
										
                                        <button type="submit" value="uye_guncelle" class="btn btn-default">KAYDET</button>
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
