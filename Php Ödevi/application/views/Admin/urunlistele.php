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
						   <a href="<?php echo base_url()?>/admin/urunekle"> Ürün Ekle</a><br>
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
                                            <th>Ürün Açıklama</th>
                                            <th>Üretim Yili</th>
                                            <th>Fiyat</th>	
											<th>Sil</th>
											<th>Düzenle</th>
											<th>Resim Güncelleme</th>											
                                        </tr>
                                    </thead>
                                    <tbody>		
									<?php
									$i=0;
									foreach ($veri as $rs){
										$i++;
									 						
										 ?>
										 <tr class="odd gradeX">
										 <td><?php echo "<img src='".base_url()."uploads/".$rs->p_image."' height=30>"?></td>										 
                                         <td><?=$rs->p_brand?></td>								 										 	
                                         <td><?=$rs->p_model?></td>										 										 	
                                         <td><?=$rs->p_detail_exp?></td>										 										 
										 <td><?=$rs->p_date_produc?></td>										 										 
                                         <td class="center"><?=$rs->p_price?></td>
										 <td><?php echo anchor(base_url()."admin/urunsil/".$rs->p_id, "SİL");?></td>
										 <td><?php echo anchor(base_url()."admin/urunduzenle/".$rs->p_id, "Düzenle");?></td>
										 <td><?php echo anchor(base_url()."admin/resimyukle/".$rs->p_id, "Resim Guncelle");?></td>										 
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
    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   
   <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
	<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
