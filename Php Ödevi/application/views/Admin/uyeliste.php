<link href="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Üyeler</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Üye Kayıt Tablosu
						   <a href="<?php echo base_url()?>/admin/yeniuye"> Üye Ekle</a><br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Üye Id</th>
                                            <th>Ad Soyad</th>
                                            <th>Email</th>
                                            <th>Cinsiyet</th>
                                            <th>Telefon</th>
                                            <th>Yetki</th>
											<th>Sil</th>
											<th>Düzenle</th>											
                                        </tr>
                                    </thead>
                                    <tbody>		
									<?php
									$i=0;
									foreach ($veri as $rs){
										$i++;
									 						
										 ?>
										 <tr class="odd gradeX">										 									
                                         <td><?=$rs->user_id?></td>								 										 	
                                         <td><?=$rs->uname_surname?></td>										 										 	
                                         <td><?=$rs->user_email?></td>										 										 
										 <td><?=$rs->user_gender?></td>										 									
                                         <td><?=$rs->user_phone?></td> 
                                         <td class="center"><?=$rs->user_authority?></td>
										 <td><?php echo anchor(base_url()."admin/uyesil/".$rs->user_id, "SİL");?></td>
										 <td><?php echo anchor(base_url()."admin/uyeduzenle/".$rs->user_id, "Düzenle");?><td>
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
