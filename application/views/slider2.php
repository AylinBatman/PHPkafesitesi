
 <script>
jQuery.noConflict()(function ($) {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 3000,
        titlesFactor: 0
    });
});
</script>
 <div style="width:100%">
 <div class="wrapper">
  <div id="ei-slider" class="ei-slider">
    
	<ul class="ei-slider-large">
		<?php
			$i=0;
			foreach ($slider as $rs)
			{   $i++;
			?>		
      <li> <img src="<?php echo base_url()?>uploads/<?=$rs->urun_resim?>" alt="">
        <div class="ei-title">
          <h2><?=$rs->urun_marka?></h2>
          <h3><?=$rs->urun_model?></h3>
        </div>
      </li>  <?php } ?>
    </ul>
	
    <!-- ei-slider-large -->
    <ul class="ei-slider-thumbs">
	<?php
			$i=0;
			foreach ($slider as $rs)
			{   $i++;
			?>
      <li class="ei-slider-element">Current</li>
      <li><a href="<?php echo base_url()?>#">Slider <?=$i?></a><img src="uploads/<?=$rs->urun_resim?>" alt=""></li>      
     <?php } ?>
	</ul>
	
    <!-- ei-slider-thumbs -->
  </div>
  <!-- ei-slider -->
</div></div>