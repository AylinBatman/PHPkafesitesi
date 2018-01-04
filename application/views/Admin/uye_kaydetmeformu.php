<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Üye Formu</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Üye Kayıt Formu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
									<form role="form" action="uye_kayit_ekle" method="POST">                                        
                                        <div class="form-group">
                                            <label>İSİM</label>
                                            <input class="form-control" id="uye_adsoyad" name="uye_adsoyad" placeholder="Ad Soyad Giriniz">
                                       </div>
										<div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="uye_email" name="uye_email" placeholder="Email adresi giriniz">
                                        </div>
										<div class="form-group">
                                            <label>ŞİFRE</label>
                                            <input class="form-control" id="uye_sifre" name="uye_sifre" placeholder="Sifre Giriniz">
                                        </div> 
										<div class="form-group">
                                            <label>CİNSiYET</label>
                                            <select id="uye_cinsiyet" name="uye_cinsiyet" class="form-control">
												<option value="NULL">Seçiniz</option>
												<option value="Erkek">Erkek</option>
                                                <option value="Bayan">Bayan</option>
                                            </select>
                                        </div>
                                        <button type="submit" value="uye_kayit_ekle" class="btn btn-default">KAYDET</button>
                                        <button type="reset" class="btn btn-default">TEMİZLE</button>
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
