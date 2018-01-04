<!DOCTYPE html>
<html lang="en">
<head>
<title>Salih İmik</title>
<meta charset="utf-8">
<link rel="icon" href="<?php echo base_url()?>images/favicon.ico">
<link rel="shortcut icon" href="<?php echo base_url()?>images/favicon.ico">
<link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/slider.css">
<link rel="stylesheet" href="<?=base_url()?>css/form.css">
<script src="<?=base_url()?>js/jquery.js"></script>
<script src="<?=base_url()?>js/jquery-migrate-1.1.1.js"></script>
<script src="<?=base_url()?>js/superfish.js"></script>
<script src="<?=base_url()?>js/jquery.equalheights.js"></script>
<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
<script src="<?=base_url()?>js/tms-0.4.1.js"></script>
<script src="<?=base_url()?>js/forms.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="<?php echo base_url()?>images/logo.png" alt=""></a> </h1>
      <div class="clear"></div>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="<?php echo base_url()?>home">ANA SAYFA</a></li>
            <li class="with_ul"><a href="<?php echo base_url()?>home">ÜRÜNLER</a>
              <ul>
                <li><a href="<?php echo base_url()?>home/products_washer">ÇAMAŞIR MAKİNESİ</a></li>
                <li><a href="<?php echo base_url()?>home/products_fridge">BUZDOLABI</a></li>
                <li><a href="<?php echo base_url()?>home/products_dishwasher">BULAŞIK MAKİNESİ</a></li>
                <li><a href="<?php echo base_url()?>home/products_bakery">Fırın</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url()?>home/campaigns">KAMPANYALAR</a></li>
            <li><a href="<?php echo base_url()?>home/about_us">HAKKIMIZDA</a></li>
            <li><a href="<?php echo base_url()?>home/contacts">BİZE YAZIN</a></li>
            <li><a href="<?php echo base_url()?>home">İŞLEM</a>
            <ul>
                <li><a href="<?php echo base_url()?>home/log_in">LOGIN</a></li>
                <li><a href="<?php echo base_url()?>home/user_insert">KAYIT OL</a></li>
                <li><a href="<?php echo base_url()?>home/user_update">BİLGİLERİM</a></li>
                
              </ul>
              </li>
              
          </ul>
          <table width="100%" height="30">
          <tr>
    <td height="30" colspan="2" align="right">
      <?php
                        $session_data = $this->session->userdata('logged_in');
                        echo 'Hosgeldin ';
                        echo $session_data['uname_surname'];?><a href="<?php echo base_url();?>home/logout">Cikis</a></td>
  </tr>
</table>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>