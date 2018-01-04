<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>  
  <h1>ÇARDAK CAFE İLETİŞİM HATTI</h1>
  <div class="one-half">
    <div class="heading_bg">
      <h2>İletişim</h2>
    </div>
  <?php
      
      foreach ($veri as $rs)
      {   
      ?>  
    <p><strong><?=$rs->firma_adi?> </strong><br>
      <b>Adres: </b><?=$rs->firma_adres?><br>
      <b>Tel: </b> <?=$rs->firma_telefon?><br>
    <b>Fax:  </b>  <?=$rs->firma_fax?><br>
      <b>Mail:</b> <?=$rs->firma_email?><br>
      </p><?php } ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.278806260412!2d32.649583214866!3d41.21569431458515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1463956084971" width="465" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <br>
    <small><a href="#" style="color:#0000FF;text-align:left">Enlarge Map</a></small> </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Bize Yazın...</h2>
    </div>  
   <p> <?php echo $this->session->flashdata('mesaj_sent');  ?></p>
  <p><?php echo $this->session->flashdata('email_sent');  ?></p>
    <form action="<?php echo base_url();?>home/mesajGonder" class="TTWForm" method="post">
      <div id="field1-container" class="field f_100">
        <label for="field1">İsim</label>
        <input name="uye_adsoy" id="field1" placeholder="Ad Soyad" value="<?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['uye_adsoyad'];?>"  type="text">
      </div>      
      <div id="field5-container" class="field f_100">
        <label for="field5">Email</label>
        <input name="uye_email" id="field5" placeholder="E-mail"  value="<?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['uye_email'];?>" type="email">
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Mesaj</label>
        <textarea rows="5" cols="20" name="uye_mesaji" id="field4"></textarea>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Gönder" type="submit">
      </div>
    </form>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>