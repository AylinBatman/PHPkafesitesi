<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
  <h1>Üye Ol...</h1>
  <div class="one-half" style="float:left">
    <div class="heading_bg">
      <h2>Üye Bilgileri</h2>
    </div>    
        <form action="<?php echo base_url(); ?>home/uye_kaydol" class="TTWForm" method="post">
      <div id="field1-container" class="field f_10">
        <label for="field1">Ad Soyad</label>
        <input name="uye_adsoyad" id="field1" type="text">
      </div>
      <div id="field2-container" class="field f_10">
        <label for="field2">Email</label>
        <input name="uye_email" id="field2" type="email">
      </div>
      <div id="field5-container" class="field f_10">
        <label for="field5">Şifre</label>
        <input name="uye_sifre" id="field5" type="password">
      </div>
	  <h4>Cinsiyet</h4>
	<div id="field5-container" class="field f_10">
<input type="radio" name="uye_cinsiyet" id="bayan" value="Bayan" class="radio"/>
<label for="radio1">Bayan</label>
</div>

<div id="field5-container" class="field f_10">
<input type="radio" name="uye_cinsiyet" id="bay" value="Erkek" class="radio"/>
<label for="radio2">Erkek</label>
</div>	
      <div id="form-submit" class="field f_100 clearfix submit">
        <input style="align=left" value="Kaydol" type="submit">
      </div>
    </form>
      
    
     </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Üye Giriş</h2>
    </div>
    <form action="<?php echo base_url(); ?>home/login" class="TTWForm" method="post">
      <div id="field2-container" class="field f_10">
        <label for="field2">Email</label>
        <input name="email" id="field2" type="email">
      </div>
      <div id="field5-container" class="field f_10">
        <label for="field5">Şifre</label>
        <input name="sifre" id="field5" type="password">
      </div>      
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Giriş" type="submit">
      </div>
    </form>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>