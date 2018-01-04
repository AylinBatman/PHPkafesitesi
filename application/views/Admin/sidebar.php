<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Ara...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Admin"><i class="fa fa-home"></i> Anasayfa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Üyelik İşlemleri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>Admin/yeni_uye_formu">Yeni Üye Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Admin/uye_listele">Üyeleri Listele</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Admin/mesajlari_listele"><imessage_select class="fa fa-envelope"></i> Mesajlar</a>
                        </li>
						<li>
                            <a href="<?php echo base_url()?>Admin/hakkimizda"><i class="fa fa-university"></i> Hakkımızda</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Haberler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>admin/haber_ekle">Haber Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/haber_listele">Haberler Listesi </a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Ürün İşlemleri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>admin/urun_ekle">Yeni Ürün Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/urun_listele">Ürünleri Listele </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/urun_resmi_duzenle">Ürün Resmi Güncelle</a>
                                </li>  
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		