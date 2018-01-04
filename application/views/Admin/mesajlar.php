    <link href="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">GELEN MESAJLAR</h1>					
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-envelope"></i> UYELERDEN GELEN MESAJLAR
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>TARIH</th>
                                            <th>MESAJ</th>
                                            <th>GELDIGI KISI</th>
											<th>E-MAIL</th>
                                            <th>MESAJ SIL</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=0;
									foreach ($mesaj_icerik as $rs){
										$i++;
									 						
										 ?>
                                        <tr class="odd gradeX">
                                            <td><?=$rs->mesaj_tarih?></td>
                                            <td><?=$rs->mesaj_detay?></td>
                                            <td><?=$rs->mesaj_gonderen?></td>
											<td><?=$rs->mesaj_gonderenemail?></td>
                                            <td align="center"><?php echo anchor(base_url()."admin/mesajlari_sil/".$rs->mesaj_id, "Sil");?></td>
                                            
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
	</div>
	</div>
	</div>
	<!-- buraya koydum -->
	<!-- jQuery -->
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>

  
	
	
	

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
	<!-- buraya koydum -->
	 

</body>

</html>
