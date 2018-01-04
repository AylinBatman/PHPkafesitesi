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
								
								
									<form role="form" action="kayit_ekle" method="POST">                                        
                                        <div class="form-group">
                                            <label>ISIM</label>
                                            <input class="form-control" id="uname_surname" name="uname_surname" placeholder="Ad Soyad Giriniz">
                                       </div>
										<div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="user_email" name="user_email" placeholder="Email adresi giriniz">
                                        </div>
										<div class="form-group">
                                            <label>SIFRE</label>
                                            <input class="form-control" id="user_password" name="user_password" placeholder="Sifre Giriniz">
                                        </div> 
										<div class="form-group">
                                            <label>CINSIYET</label>
                                            <input class="form-control" id="user_gender" name="user_gender" placeholder="cinsiyet Giriniz">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon</label>
                                            <input class="form-control" id="user_phone" name="user_phone" placeholder="Telefon Giriniz">
                                        </div>
                                        <button type="submit" value="kayit_ekle" class="btn btn-default">KAYDET</button>
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
