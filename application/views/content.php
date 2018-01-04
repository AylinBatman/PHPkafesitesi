<!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
	<?php
			$i=0;
			foreach ($urun as $rs)
			{   $i++;
			?>	
      <div> <img src="<?php echo base_url();?>uploads/<?=$rs->urun_resim?>" width="465" height="300" alt="">
        <h2><?=$rs->urun_model?></h2>
        <p><?=$rs->urun_detay?> </p>
        <p style="text-align:right; margin-right: 16px"><a href="<?php echo base_url()?>home/urun_detayi/<?=$rs->urun_id?>" class="button">Detay</a></p>
      </div>
      <?php } ?>
      
      
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->

    <br><br><br><br><br><br><br><br>
    <div id="prod_nav">	
      <ul>	
	<?php
			$i=0;
			foreach ($urun as $rs)
			{   $i++;
			?>		  
        <li><a href="#1"><img src="<?php echo base_url();?>uploads/<?=$rs->urun_resim?>" width="160"  alt=""><br><strong><?=$rs->urun_model?></strong></a></li>
		<?php } ?>
        </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
 <br><br><br><br><br><br>
  <div style="clear:both"></div>
  <div class="one-third">
  <br><br><br>
    <h2>İş Çözümlerimiz</h2>
    <p>Kişiye özel Ürün Yelpamizle Müsterilerimizin İsteğine göre tasarım yapmakta, onların hayalinde tasarladıklarını mistik çizgi ve modern sanatla birleştirerk istediklerinden fazlasını ortaya koymak görevimizdir.</p>
    
  </div>
  <div class="one-third">
  <br><br><br>
    <h2>Müşteri Politakamız</h2>
    <?php
      $i=0;
      foreach ($veri as $rs)
      {   $i++;
      ?>  
    <p><?=$rs->firma_misyon?></p><?php } ?>
  </div>
  <div class="one-third last">
  <br><br><br>
    <h2>Son Haberler</h2>
	<?php
			$i=0;
			foreach ($haber as $rs)
			{   $i++;
			?>	
    <p><?=$rs->haber_detay?></p><?php } ?>
    <p style="text-align:right; margin-right: 15px"><a href="<?php echo base_url()?>home/haberler" class="button_small">Tümünü Oku</a></p>
  </div> 
  <div style="clear:both"></div>
  <!--<div class="box_highlight" style="margin-top:40px">
    <h2 style="text-align:center">Some kind of sales pitch goes here!</h2>
  </div>
  -->
  <br><br>
  <div class="one-half">
    <div class="heading_bg">
      <h2>Neden SLH BEYAZ EŞYA</h2>
    </div>
    <blockquote> Bilgi ve Tecrübenin Birleşimi Sonucu En kaliteli Ürünleri Sunmaktayız. Geçmişten Geleceğe Güven ve Tecrübe ile... </blockquote>
      
  </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>BİZİMLE İLETİŞİME GEÇ!</h2>
	  <blockquote><p><em><a href="<?php echo base_url()?>home/iletisim">İletişim Sayfamıza</a> Mesajınızı Yazarak  Bize İletebilirsiniz</em></p></blockquote>
    </div>
    
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
