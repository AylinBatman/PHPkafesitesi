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
                                    <a href="<?php echo base_url()?>Admin/yeniuye">Yeni Üye Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Admin/uyeliste">Üyeleri Listele</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Admin/mesajlistele"><i class="fa fa-table fa-fw"></i> Mesajlar</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Haberler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>admin/haberekle">Haber Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/haberlistele">Haberler Listesi </a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Ürün İşlemleri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>admin/urunekle">Yeni Ürün Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/urunlistele">Ürünleri Listele </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/urunresimguncelle">Ürün Resmi Güncelle</a>
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
		