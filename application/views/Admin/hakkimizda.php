<link href="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
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
                           FİRMA BİLGİLERİ
						   <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Firma</th>
                                            <th>Adres</th>
                                            <th>Telefon</th>
                                            <th>Fax</th>
                                            <th>E-Mail</th>
                                            <th>Misyon</th>
											<th>Vizyon</th>
											<th>Sembol Söz</th>
											<th></th>											
                                        </tr>
                                    </thead>
                                    <tbody>		
									<?php
									$i=0;
									foreach ($company as $rs){
										$i++;
									 						
										 ?>
										 <tr class="odd gradeX">
										 <td><?=$rs->firma_adi?></td>										 
                                         <td><?=$rs->firma_adres?></td>								 										 	
                                         <td><?=$rs->firma_telefon?></td>										 										 	
                                         <td><?=$rs->firma_fax?></td>										 										 
										 <td><?=$rs->firma_email?></td>										 										 
                                         <td><?=$rs->firma_misyon?></td>
										 <td><?=$rs->firma_vizyon?></td>
										 <td><?=$rs->firma_sembolsoz?></td>
										 <td><?php echo anchor(base_url()."admin/hakkimizda_duzenle/".$rs->firma_id,"Duzenle" );?></td>										 
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
