<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-750">
    <header>
        <div class="swiper-container top-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/blue.jpg" alt="" />
                    </a>
                    <div class="content-slide-show">
                        <h4 class="sub-title">custom video backgrounds</h4>
                        <h3 class="title">perfected every pixel</h3>
                        <p class="content">All videos you see in th preview are available in the dowload file along with
                            stock photo!</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/coffee.jpg" alt="" />
                    </a>
                    <div class="content-slide-show">
                        <h4 class="sub-title">custom video backgrounds</h4>
                        <h3 class="title">perfected every pixel</h3>
                        <p class="content">All videos you see in th preview are available in the dowload file along with
                            stock photo!</p>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </header><!-- End Header -->

    <!-- Top Menu -->
    <div class="top-menu">
        <div class="container center-logo hidden">
            <div class="reponsive-menu">
                <i class="fa fa-bars item-menu"></i>
            </div>
            <div class="logo">
                <a href="#">
                    <div class="left"><img class="img_logo" src="./images/logo.png" alt="" /></div>
                    <!-- <div class="logo_content">
                            <div class="logo_text">Dale</div>
                        </div> -->
                </a>
            </div>
            <!--End-Logo-->
        </div>
        <div class="top_panel_middle">
            <div class="container content_wrap">
                <div class="logo">
                    <a href="#">
                        <div class="left"><img class="img_logo" src="images/Logo.png" alt="" /></div>
                        <!-- <div class="logo_content">
                                <div class="logo_text">Dale</div>
                            </div> -->
                    </a>
                </div>
                <!--End-Logo-->
                <div class="top_menu">
                    <nav class="main-menu">
                        <ul class="menu">
                            <li class="current">
                                <a href="#">HOME<i class="pl-10 fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home(Slider1)</a></li>
                                    <li><a href="#">Home(Slider2)</a></li>
                                    <li><a href="#">Home(Slider3)</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a href="#">PAGES<i class="pl-10 fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Page-1</a></li>
                                    <li><a href="#">Page-2</a></li>
                                    <li><a href="#">Page-3</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a href="#">FEATURES<i class="pl-10 fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Features-1</a></li>
                                    <li><a href="#">Features-2</a></li>
                                    <li><a href="#">Features-3</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a href="#">PORTFOLIO</a>
                            </li>
                            <li class="current">
                                <a href="#">BLOG</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="quick-access">
                        <form action="#" method="get">
                            <div class="form-search">
                                <input id="search" type="text" placeholder="Search..." name="key" value=""
                                    class="input-text" maxlength="128" />
                                <div class="button"><i class="fa fa-search"></i></div>
                            </div>
                        </form>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <!--End-Top-Menu-->
            </div>
        </div>
        <!--End-Top-Panel-Middle-->
        <div class="main-menu-reponsive">
            <div class="full-show" id="full-show"></div>
            <ul class="menu-reponsive" id="reponsive-menu">
                <li class="item-menu active-rp">
                    <a data-toggle="collapse" data-target=".navbar-collapse-home" href="#">
                        <span>HOME</span>
                        <span class="fa fa-chevron-down op"></span>
                        <span class="fa fa-chevron-up up"></span>
                    </a>
                    <div class="navbar-collapse-home collapse">
                        <ul class="sub-content">
                            <li class="item-menu-1"><a href="#"><span>Home(Slider1)</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Home(Slider2)</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Home(Slider3)</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item-menu">
                    <a data-toggle="collapse" data-target=".navbar-collapse-features" href="#">
                        <span>PAGES</span>
                        <span class="fa fa-chevron-down op"></span>
                        <span class="fa fa-chevron-up up"></span>
                    </a>
                    <div class="navbar-collapse-features collapse">
                        <ul class="sub-content">
                            <li class="item-menu-1"><a href="#"><span>Page-1</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Page-2</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Page-3</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item-menu">
                    <a data-toggle="collapse" data-target=".navbar-collapse-about" href="#">
                        <span>FEATURES</span>
                        <span class="fa fa-chevron-down op"></span>
                        <span class="fa fa-chevron-up up"></span>
                    </a>
                    <div class="navbar-collapse-about collapse">
                        <ul class="sub-content">
                            <li class="item-menu-1"><a href="#"><span>Features-1</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Features-2</span></a></li>
                            <li class="item-menu-1"><a href="#"><span>Features-3</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item-menu"><a href="#"><span>PORTFOLIO</span></a></li>
                <li class="item-menu"><a href="#"><span>BLOG</span></a></li>
            </ul>
        </div><!-- end-main-menu-reponsive -->
        <div class="" style="clear: both"></div>
    </div><!-- End Top Menu -->

    <!-- Service -->
    <div class="service">
        <div class="container">
            <h3 class="title"><i class="fa fa-gear"></i><span> OUR </span>SERVICES</h3>
            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, dictum
                nisi non.Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum nisi non, dictum nisi
                non, integer aliquam sed ante non volutpat</p>
        </div>
    </div>
    <!-- End Service -->
    <!-- Item -->
    <div class="items">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <span><i class="fa fa-expand"></i></span>
                        <div class="content">
                            <h4 class="title">DesignReponsive </h4>
                            <p class="content">Integer aliquam sed ante non volutpat. Aenean vitae nulla varius, dictum
                                nisi non, dictum nisi non, integer aliquam sed ante non volutpat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Item -->
    <!-- Footer -->
    <footer></footer>
    <!-- End Footer -->
    <!-- Back Top -->
    <div id="bttop" class="bttop is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div><!-- End Back Top -->
</div>