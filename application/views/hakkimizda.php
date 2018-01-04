<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
  <div style="margin-bottom: 15px"> <img  src="<?php echo base_url()?>img/is.jpg" alt="" width="960" height="450"> </div>
  <div style="clear:both"></div>
  <h1 style="padding: 20px 0">Profesyonel Cozumler</h1>
  <!-- First Column -->
  <div class="one-third">
    <div class="heading_bg">
      <h2>Çardak Cafe</h2>
    </div>
	<?php		
			foreach ($veri as $rs)
			{   
			?>	
    <p><strong>Misyonumuz</strong><br>
      <?=$rs->firma_misyon?><br><br>
      <strong>Vizyonumuz</strong><br>
       <?=$rs->firma_vizyon?> </p>
       
  </div>
  <!-- Second Column -->
  <div class="one-third">
    <div class="heading_bg">
      <h2>Hizmetlerimiz</h2>
    </div>
    <ul class="container_links">
      <li><a href="<?php echo base_url()?>home/urun_kahvalti">Kahvaltı Çeşitlerimiz</a></li>
      <li><a href="<?php echo base_url()?>home/urun_tatlilar">Tatlı Çeşitlerimiz</a></li>
      <li><a href="<?php echo base_url()?>home/urun_sogukicecekler">Soğuk İçeceklerimiz</a></li>
      <li><a href="<?php echo base_url()?>home/urun_sicakicecekler">Sıcak İçeceklerimiz</a></li>    
      <li><a href="<?php echo base_url()?>home/urun_aparatifler">Aparatif Ürünlerimiz</a></li>
    </ul>      
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-third last">
    <div class="heading_bg">
      <h2>Sembol Sözümüz</h2>
    </div>
    <blockquote>  <?=$rs->firma_sembolsoz?></blockquote>
    <p><small>Aylin BATMAN</small></p><?php } ?>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>