<!DOCTYPE HTML>
<head>

<?php
 foreach ($veri as $rs) 
 {
     $title =$rs->title;
     $keywords=$rs->keywords;
     $description=$rs->description;
     $name=$rs->name;
     $adres = $rs->adres;
     $sehir=$rs->sehir;
     $tel=$rs->tel;
     $fax=$rs->fax;
   
 }

?>


<title><?=$title2 ?></title>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<meta name="copyright" content="<?=$name?>" >
<meta name="keywords" content="<?=$keywords?>" >
<meta name="description" content="<?=$description?>" >
<meta name="adresimiz" content="<?=$adres?>" >
<meta name="merkezlerimiz" content="<?=$sehir?>" >
<meta name="telefon" content="<?=$tel?>" >
<meta name="fax" content="<?=$fax?>" >

<!-- Google Fonts -->
<link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>menu/css/simple_menu.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>yeni.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>boxes/css/style5.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/nivo-slider.css" type="text/css" media="screen">
<!-- Contact Form -->
<link href="<?php echo base_url()?>contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="<?php echo base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.tools.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/custom.js"></script>
<script src="<?php echo base_url()?>js/jquery.eislideshow.js"></script>
<script src="<?php echo base_url()?>js/slides/slides.min.jquery.js"></script>
<script src="<?php echo base_url()?>js/cycle-slider/cycle.js"></script>
<script src="<?php echo base_url()?>js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url()?>js/tabify/jquery.tabify.js"></script>
<script src="<?php echo base_url()?>js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>js/twitter/jquery.tweet.js"></script>
<script src="<?php echo base_url()?>js/scrolltop/scrolltopcontrol.js"></script>
<script src="<?php echo base_url()?>js/portfolio/filterable.js"></script>
<script src="<?php echo base_url()?>js/modernizr/modernizr-2.0.3.js"></script>
<script src="<?php echo base_url()?>js/easing/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url()?>js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="<?php echo base_url()?>js/swfobject/swfobject.js"></script>

<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancybox/jquery.fancybox.css" media="all">
<script src="<?php echo base_url()?>js/fancybox/jquery.fancybox-1.2.1.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<table style="margin:0; padding:0"><tr><td style="line-height:20px; padding:0 10px;"><font color="red"><em><b><?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['uye_adsoyad'];?></em></b></font><a href="<?php echo base_url()?>home/logout">&nbsp;&nbsp;-ÇIKIŞ-</a><b>&nbsp;&nbsp;&nbsp;*** ÇARDAK CAFE ***&nbsp;&nbsp;&nbsp; <font color="green"><em>... KEYİFLİ ZAMAN GERÇİRECEĞİNİZ GÜZEL BİR MAKAN ...</em></b></font></td></tr></table>


<!-- Main Menu -->
<ol id="menu">
  <li class="active_menu_item"><a href="<?php echo base_url()?>home" style="color:#FFF">ANASAYFA</a>     
  </li> 
  <li><a href="#">ÜRÜNLERİMİZ</a>
    <!-- sub menu -->
    <ol>
      <li class="active_menu_item"><a href="<?php echo base_url()?>home/urun_kahvalti">KAHVALTI</a></li>
      <li class="active_menu_item"><a href="<?php echo base_url()?>home/urun_tatlilar">TATLILAR</a></li> 
      <li class="active_menu_item"><a href="<?php echo base_url()?>home/urun_sogukicecekler">SOĞUK İÇEÇEKLER</a></li>
      <li class="active_menu_item"><a href="<?php echo base_url()?>home/urun_sicakicecekler">SICAK İÇECEKLER</a></li>
      <li class="active_menu_item"><a href="<?php echo base_url()?>home/urun_aparatifler">APARATİF ÜRÜNLER</a></li>
    </ol>
  </li>
  <!-- end sub menu -->  
 
  
  <li class="active_menu_item"><a href="<?php echo base_url()?>home/iletisim">İLETİŞİM</a></li>
  <li class="active_menu_item"><a href="<?php echo base_url()?>home/hakkimizda">HAKKIMIZDA</a></li>
  <li class="active_menu_item"><a href="<?php echo base_url()?>home/login">GİRİŞ YAP</a></li>  
</ol>