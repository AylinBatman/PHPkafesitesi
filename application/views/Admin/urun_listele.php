<link href="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ÜRÜNLER</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Ürün Listesi
						   <a href="<?php echo base_url()?>admin/urun_ekle"> Ürün Ekle</a><br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Ürün Resim</th>
                                            <th>Marka</th>
                                            <th>Model</th>
                                            <th>Ürün Türü</th>
                                            <th>Üretim Yili</th>
                                            <th>Fiyat</th>
											<th>Açıklama</th>
											<th>Sil</th>
											<th>Düzenle</th>
											<th>Resim Ekle</th>											
                                        </tr>
                                    </thead>
                                    <tbody>		
									<?php
									$i=0;
									foreach ($veri as $rs){
										$i++;
                                                            
                                         ?>
                                         <tr class="odd gradeX">
                                         <td><?php echo "<img src='".base_url()."uploads/".$rs->urun_resim."' height=30>"?></td>                                        
                                         <td><?=$rs->urun_marka?></td>                                                                         
                                         <td><?=$rs->urun_model?></td>                                                                             
                                         <td><?=$rs->urun_tipi?></td>                                                                               
                                         <td><?=$rs->urun_uretimtarihi?></td>                                                                        
                                         <td class="center"><?=$rs->urun_fiyat?></td>
                                         <td><?=$rs->urun_detay?></td>
                                         <td><?php echo anchor(base_url()."admin/urun_sil/".$rs->urun_id, "SİL");?></td>
                                         <td><?php echo anchor(base_url()."admin/urun_duzenle/".$rs->urun_id, "Düzenle");?></td>
                                         <td><?php echo anchor(base_url()."admin/resim_ekle/".$rs->urun_id, "Resim Ekle");?></td>  
                                        </tr>								
											<?php } ?>				
										
                                    </tbody>
									 
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

                
            </div>
            <!-- /.row -->
            
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    
<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   
   <!-- Custom Theme JavaScript -->
    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
	

</body>

</html>
