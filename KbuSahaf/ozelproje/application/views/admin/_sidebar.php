        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?=base_url()?>assets/admin/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?=$this->session->oturum_data['adsoy']?>
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a  href="<?=base_url()?>admin/home"><i class="glyphicon glyphicon-home"></i>Anasayfa</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/kullanicilar"><i class="glyphicon glyphicon-user"></i>Kullanıcılar</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/musteriler"><i class="glyphicon glyphicon-th-large"></i>Müşteriler</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/kitaplar"><i class="glyphicon glyphicon-book"></i>Kitaplar</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/siparisler"><i class="glyphicon glyphicon-shopping-cart"></i>Siparişler <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Yeni </a>
                            </li>
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Onaylanan </a>
                            </li>
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Kargodaki </a>
                            </li>
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tamamlanan </a>
                            </li>
                        </ul>
                    <li>
                        <a  href="<?=base_url()?>admin/home"><i class="glyphicon glyphicon-home"></i>İletişim</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/home"><i class="glyphicon glyphicon-home"></i>Yorumlar</a>
                    </li>
                    <li>
                        <a  href="<?=base_url()?>admin/home"><i class="glyphicon glyphicon-home"></i>Sayfa Ayarları</a>
                    </li>    
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->