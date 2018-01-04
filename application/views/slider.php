<div id="container">
  <div id="slider3" class="nivoSlider">
  <?php
			$i=0;
			foreach ($slider as $rs)
			{   $i++;
			?>		
  <a href="<?php echo base_url();?>home/urun_detayi/<?=$rs->urun_id?>"> <img title="ÇARDAK CAFE" src="<?php echo base_url();?>uploads/<?=$rs->urun_resim?>" width="960" height="450"  alt=""></a> <?php } ?>
   </div>
   
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div id="site_title"><a href="<?php echo base_url();?>home"><img src="img/logo.png" alt=""></a></div>
