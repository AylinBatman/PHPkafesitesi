<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
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
                                
                                
                                    <form role="form" action="<?php echo base_url();?>admin/hakkimizda_guncelle/<?php echo $veri[0]->firma_id?>" method="POST">                                        
                                        <div class="form-group">
                                            <label>FiRMA ADI</label>
                                            <input class="form-control" id="firma_adi" name="firma_adi" value="<?php echo $veri[0]->firma_adi ?>" >
                                       </div>
                                        <div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="firma_email" name="firma_email" value="<?php echo $veri[0]->firma_email ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>TEL</label>
                                            <input class="form-control" id="firma_telefon" name="firma_telefon" value="<?php echo $veri[0]->firma_telefon?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>ADRES</label>
                                            <input class="form-control" id="firma_adres" name="firma_adres" value="<?php echo $veri[0]->firma_adres?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>FAX</label>
                                            <input class="form-control" id="firma_fax" name="firma_fax" value="<?php echo $veri[0]->firma_fax?>" >
                                        </div>
                                        <div class="form-group">
                                         <label>MiSYON</label>
                                        <textarea name="firma_misyon" id="firma_misyon" value="<?php echo $veri[0]->firma_misyon?>" rows="5" cols="100"> <?=$veri[0]->firma_misyon?>                                    
                                        </textarea> 
                                        <script>
                                                    CKEDITOR.replace( 'firma_misyon' );
                                                </script>                                                                                   
                                        </div> 

                                        <div class="form-group"> 
                                        <label>ViZYON</label>
                                        <textarea name="firma_vizyon" id="firma_vizyon" value="<?php echo $veri[0]->firma_vizyon?>" rows="5" cols="100">          <?=$veri[0]->firma_vizyon?>                                       
                                        </textarea>   
                                                <script>
                                                    CKEDITOR.replace( 'firma_vizyon' );
                                                </script>                                                                             
                                        </div> 
                                        <div class="form-group">
                                        <label>GUZEL SÖZ</label>
                                        <textarea name="firma_sembolsoz" id="firma_sembolsoz" value="<?php echo $veri[0]->firma_sembolsoz?>" rows="5" cols="100">           <?=$veri[0]->firma_sembolsoz?>                                      
                                        </textarea>    
                                                <script>
                                                    CKEDITOR.replace( 'firma_sembolsoz' );
                                                </script>                                                                                
                                        </div> 


                                        
                                        <button type="submit" value="hakkimizda_guncelle" class="btn btn-default">KAYDET</button>
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
