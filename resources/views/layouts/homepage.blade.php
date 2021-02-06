<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cosm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/icons/icon_logo.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-plugins-call.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
    <style>
        /**
        * The CSS shown here will not be introduced in the Quickstart guide, but shows
        * how you can use CSS to style your Element's container.
        */
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;}
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">Eski bir tarayıcı kullanıyorsunuz. Deneyiminizi ve güvenliğinizi iyileştirmek için lütfen <a href="https://www.google.com/intl/tr_tr/chrome/"> ile tarayıcınızı yükseltin.</a></p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper home-two">
    <!-- HEADER AREA START -->
    <header class="header-area">
        <!-- Header top area start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="top-bar-left">
                            <div class="contact-link">
                                <div class="info_box phone">
                                    Bizi Arayın : <span> 0212 222 2222 </span>
                                </div>
                                <div class="info_box email">
                                    E-mail :  <a href="mailto:info@cosm.com">info@cosm.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="topbar-nav">
                            <div class="wpb_wrapper">
                                <!-- my account -->
                                @auth
                                    <div class="menu-my-account-container">
                                        <a href="#"><img src="{{ Auth::user()->profile_photo_url }}" title="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" width="30px" style="border-radius: 50px;"/> {{ Auth::user()->name }}<i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="{{ route('profile.show') }}">Profilim</a></li>
                                            <li><a href="{{ route('checkout') }}">Ödeme</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    {{--<button class="btn btn-light" type="submit"></button>--}}
                                                    <a href="" onclick="this.closest('form').submit();return false;">Çıkış Yap</a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endauth
                                @guest
                                    <div class="menu-my-account-container">
                                        <a href="#"><i class="first-icon fa fa-user-circle"></i>Hesap İşlemleri<i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="{{ route('login') }}">Giriş Yap</a></li>
                                            <li><a href="{{ route('register') }}">Kayıt Ol</a></li>
                                        </ul>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar area end -->
        <!-- Header bottom area start -->
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="header_logo col-left col-lg-2 col-xl-2 col-md-12 col-sm-12">
                        <a href="{{ route('anasayfa') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="cosm"></a>
                    </div>
                    <div class="col-right col-sm-12 col-lg-10 col-xl-10 col-md-12 display_top">
                        <!-- main-menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="current"><a href="{{ route('product.index') }}">MARKA<i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            @foreach($brands as $brand)
                                            <li><a href="{{ route('brand',$brand->slug) }}">{{ $brand->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">KATEGORİ<i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu-3-column">
                                            <li><a href="#">Cilt Bakımı</a>
                                                <ul>
                                                    <li><a href="contact-us.html">Tonik</a></li>
                                                    <li><a href="portfolio.html">Peeling</a></li>
                                                    <li><a href="about-us.html">Nemlendirici</a></li>
                                                    <li><a href="contact-us.html">Yüz Temizleme</a></li>
                                                    <li><a href="faq.html">Dudak ve Göz Bakımı</a></li>
                                                    <li><a href="service.html">Cilt Serumu ve Yağlar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Saç Bakımı</a>
                                                <ul>
                                                    <li><a href="blog-no-sidebar.html">Şampuan</a></li>
                                                    <li><a href="blog.html">Saç Kremi</a></li>
                                                    <li><a href="single-blog-audio.html">Saç Maskeleri</a></li>
                                                    <li><a href="single-blog-gallery.html">Saç Serumları</a></li>
                                                    <li><a href="single-blog-video.html">Saç Bakım Yağları</a></li>
                                                    <li><a href="single-blog.html">Saç Spreyi ve Köpükler</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Kişisel Bakım</a>
                                                <ul>
                                                    <li><a href="shop-list.html">Banyo</a></li>
                                                    <li><a href="shop-right.html">Ağız Bakımı</a></li>
                                                    <li><a href="cart.html">Ayak Bakımı</a></li>
                                                    <li><a href="checkout.html">Hijyen Ürünleri</a></li>
                                                    <li><a href="shop.html">Parfüm ve Deodorant</a></li>
                                                    <li><a href="single-product.html">Anti Bakteriyel Ürünleri</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('discount') }}">KAMPANYA</a></li>
                                    <li><a href="{{ route('blog.index') }}">BLOG</a></li>
                                    <li><a href="{{ route('about-us') }}">HAKKIMIZDA</a></li>
                                    <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li class="current"><a href="{{ route('product.index') }}">MARKA<i class="fa fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                @foreach($brands as $brand)
                                                    <li><a href="{{ route('brand',$brand->slug) }}">{{ $brand->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">KATEGORİ<i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu-3-column">
                                                <li><a href="#">Cilt Bakımı</a>
                                                    <ul>
                                                        <li><a href="contact-us.html">Tonik</a></li>
                                                        <li><a href="portfolio.html">Peeling</a></li>
                                                        <li><a href="about-us.html">Nemlendirici</a></li>
                                                        <li><a href="contact-us.html">Yüz Temizleme</a></li>
                                                        <li><a href="faq.html">Dudak ve Göz Bakımı</a></li>
                                                        <li><a href="service.html">Cilt Serumu ve Yağlar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Saç Bakımı</a>
                                                    <ul>
                                                        <li><a href="blog-no-sidebar.html">Şampuan</a></li>
                                                        <li><a href="blog.html">Saç Kremi</a></li>
                                                        <li><a href="single-blog-audio.html">Saç Maskeleri</a></li>
                                                        <li><a href="single-blog-gallery.html">Saç Serumları</a></li>
                                                        <li><a href="single-blog-video.html">Saç Bakım Yağları</a></li>
                                                        <li><a href="single-blog.html">Saç Spreyi ve Köpükler</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Kişisel Bakım</a>
                                                    <ul>
                                                        <li><a href="shop-list.html">Banyo</a></li>
                                                        <li><a href="shop-right.html">Ağız Bakımı</a></li>
                                                        <li><a href="cart.html">Ayak Bakımı</a></li>
                                                        <li><a href="checkout.html">Hijyen Ürünleri</a></li>
                                                        <li><a href="shop.html">Parfüm ve Deodorant</a></li>
                                                        <li><a href="single-product.html">Anti Bakteriyel Ürünleri</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('discount') }}">KAMPANYA</a></li>
                                        <li><a href="{{ route('blog.index') }}">BLOG</a></li>
                                        <li><a href="{{ route('about-us') }}">HAKKIMIZDA</a></li>
                                        <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="blockcart cart-preview">
                            <div class="header">
                                <a href="{{ route('cart') }}">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="item_txt"> Sepete Git <span class="item_count"></span></span>
                                    <span class="item_total"></span>
                                </a>
                                {{--<div class="body">
                                    <ul>
                                        <li>
                                            <div class="img_content">
                                                <img class="product-image img-responsive" src="{{ asset('assets/images/product/cat/cat2.jpg') }}" alt="" title="" style="max-width: 70px; ">
                                                <span class="product-quantity">1x</span>
                                            </div>
                                            <div class="right_block">
                                                <span class="product-name">COSRX - Advanced Snail 96 Mucin Power Essence - 100ml</span>
                                                <span class="product-price">177.90 TL</span>
                                                <a href="#" class="remove-from-cart"> <i class="fa fa-remove pull-xs-left"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content">
                                                <img class="product-image img-responsive" src="{{ asset('assets/images/product/cat/cat2.jpg') }}" alt="" title="">
                                                <span class="product-quantity">1x</span>
                                            </div>
                                            <div class="right_block">
                                                <span class="product-name">ISNTREE - Hyaluronic Acid Aqua Gel Cream- 100ml</span>
                                                <span class="product-price">199.90 TL</span>
                                                <a href="#" class="remove-from-cart"><i class="fa fa-remove pull-xs-left"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="price_content">
                                        <div class="cart-subtotals">
                                            <div class="products price_inline">
                                                <span class="label">Ara Toplam</span>
                                                <span class="value">377.80 TL</span>
                                            </div>
                                            <div class=" price_inline">
                                                <span class="label"></span>
                                                <span class="value"></span>
                                            </div>
                                            <div class="shipping price_inline">
                                                <span class="label">Kargo</span>
                                                <span class="value">0 TL</span>
                                            </div>
                                        </div>
                                        <div class="cart-total price_inline">
                                            <span class="label">Toplam</span>
                                            <span class="value">377.80 TL</span>
                                        </div>
                                    </div>
                                    <div class="checkout">
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Satın Al</a>
                                    </div>
                                </div>--}}
                            </div> {{--TODO: yapılaccak--}}
                        </div>
                        <div class="block-search  dropdown js-dropdown">
                            <span class="search-icon"><i class="fa fa-search"></i></span>
                            <div id="search_widget" class="search_top dropdown-menu">
                                <form method="GET" action="{{ route('product.index') }}" >
                                    <input class="text_input" name="search" value="{{ request()->search }}" placeholder="Ürün Adı" type="text">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header bottom area end -->
    </header>

    @yield('content')

<!-- footer main -->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">
                            <h3>İletişim Bilgileri</h3>
                            <div class="footer-contact">
                                <p class="address add">İstanbul Kartal - TR.</p>
                                <p class="phone add">0212 222 2222</p>
                                <p class="email add"><a class="contacts-link" href="mailto:info@cosm.com">info@cosm.com</a></p>
                                <p class="time add">Çalışma Saatleri: 9.00 - 17.00</p>
                            </div>
                            <div class="social_follow">
                                <ul>
                                    <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                    <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                    <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                    <li class="googleplus"><a href="#" target="_blank">Google +</a></li>
                                    <li class="instagram"><a href="#" target="_blank">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">
                            <h3 class="hidden-sm-down">Ürünler</h3>
                            <ul class="footer_list">
                                <li><a href="#" class="contacts-link">Fiyatı Düşenler</a></li>
                                <li><a href="#" class="contacts-link">Yeni Ürünler</a></li>
                                <li><a href="#" class="contacts-link">En Çok Satanlar</a></li>
                                <li><a href="#" class="contacts-link">Mağazalar</a></li>
                                <li><a href="#" class="contacts-link">Giriş</a></li>
                                <li><a href="#" class="contacts-link">Hesabım</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">
                            <h3 class="hidden-sm-down">Şirketimiz</h3>
                            <ul class="footer_list">
                                <li><a href="#" class="contacts-link">Teslimat</a></li>
                                <li><a href="#" class="contacts-link">Yasal Uyarı</a></li>
                                <li><a href="#" class="contacts-link">Kullanım Koşulları</a></li>
                                <li><a href="#" class="contacts-link">Hakkımızda</a></li>
                                <li><a href="#" class="contacts-link">Güvenli Ödeme</a></li>
                                <li><a href="#" class="contacts-link">Bize Ulaşın</a></li>
                            </ul>
                        </div>
                        <div  class="footer_block links col-xs-12 col-md-6 col-sm-12 col-lg-6">
                            <h3 class="hidden-sm-down">Instagram</h3>
                            <div class="container">
                                <div class="row item-instagram">
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/1.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/2.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/3.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/4.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/5.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="#" class="contacts-link">
                                            <img src="{{ asset('assets/images/Instagram/6.jpg') }}" alt="Cosm Instagram">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer main end -->
</div>
<!-- footer copyright area -->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-inner">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <p>Copyright © 2021 Cosm . Tüm Hakları Saklıdır.</p>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                            <img src="{{ asset('assets/images/icons/payment-icon.png') }}" alt="payment icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer copyright area end -->
</footer>
{{--<!-- QUICKVIEW PRODUCT START -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="product_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-btn">
                    <button class="close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- single product area -->
                    <div class="single-product-page-area">
                        <div class="container">
                            <div class="row">
                                <div id="content-wrapper" class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="page-content">
                                                <div class="images-container">
                                                    <!-------->
                                                    <div id="content1">
                                                        <div class="js-qv-mask mask pos_content">
                                                            <div class="product-images js-qv-product-images owl-carousel">
                                                                <div class="thumb-container">
                                                                    <ul id="tabs1" class="nav nav-tabs" data-tabs="tabs">
                                                                        <li class="active"><a href="#red" data-toggle="tab">
                                                                                <img src="{{ asset('assets/images/product/thumbnails/1.jpg') }}" alt="">
                                                                            </a></li>
                                                                        <li><a href="#orange" data-toggle="tab">
                                                                                <img src="{{ asset('assets/images/product/thumbnails/2.jpg') }}" alt="">
                                                                            </a></li>
                                                                        <li><a href="#yellow" data-toggle="tab">
                                                                                <img src="{{ asset('assets/images/product/thumbnails/3.jpg') }}" alt="">
                                                                            </a></li>
                                                                        <li><a href="#green" data-toggle="tab">
                                                                                <img src="{{ asset('assets/images/product/thumbnails/4.jpg') }}" alt="">
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-cover">
                                                            <div id="my-tab-content1" class="tab-content">
                                                                <div class="tab-pane active" id="red">
                                                                    <img src="{{ asset('assets/images/product/single/1.jpg') }}" alt="harosa single product">
                                                                    <div class="layer hidden-sm-down">
                                                                        <i class="material-icons zoom-in"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="orange">
                                                                    <img src="{{ asset('assets/images/product/single/2.jpg') }}" alt="harosa single product">
                                                                    <div class="layer hidden-sm-down">
                                                                        <i class="material-icons zoom-in"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="yellow">
                                                                    <img src="{{ asset('assets/images/product/single/3.jpg') }}" alt="harosa single product">
                                                                    <div class="layer hidden-sm-down">
                                                                        <i class="material-icons zoom-in"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="green">
                                                                    <img src="{{ asset('assets/images/product/single/4.jpg') }}" alt="harosa single product">
                                                                    <div class="layer hidden-sm-down">
                                                                        <i class="material-icons zoom-in"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1 class="h1 namne_details">Hummingbird printed t-shirt</h1>
                                            <p class="reference">Reference: demo_1</p>
                                            <div id="product_comments_block_extra" class="no-print">
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <ul class="comments_advices">
                                                    <li>
                                                        <a href="#idTab5" class="reviews _mPS2id-h">Read reviews (<span>1</span>)</a>
                                                    </li>
                                                    <li>
                                                        <a class="open-comment-form">Write a review</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-prices">
                                                <div class="product-discount">
                                                    <span class="regular-price">$23.90</span>
                                                </div>
                                                <div class="product-price h5 has-discount">
                                                    <div class="current-price">
                                                        <span>$21.99</span>
                                                        <span class="discount discount-percentage">Save 8%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-information">
                                                <div class="product-desc">
                                                    <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                                </div>
                                                <div class="product-actions">
                                                    <form action="#">
                                                        <div class="product-variants">
                                                            <div class="product-variants-item">
                                                                <span class="control-label">Size</span>
                                                                <select class="form-control form-control-select" id="group_1">
                                                                    <option value="1" title="S" selected="selected">S</option>
                                                                    <option value="2" title="M">M</option>
                                                                    <option value="3" title="L">L</option>
                                                                    <option value="4" title="XL">XL</option>
                                                                </select>
                                                            </div>
                                                            <div class="product-variants-item">
                                                                <span class="control-label">Color</span>
                                                                <ul id="group_2">
                                                                    <li class="float-xs-left input-container">
                                                                        <label>
                                                                            <input class="input-color" data-product-attribute="2" name="group[2]" value="8" checked="checked" type="radio">
                                                                            <span class="color"><span class="sr-only">White</span></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="float-xs-left input-container">
                                                                        <label>
                                                                            <input class="input-color" data-product-attribute="2" name="group[2]" value="11" type="radio">
                                                                            <span class="color color-two"><span class="sr-only">Black</span></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-discounts"></div>
                                                        <div class="product-add-to-cart">
                                                            <span class="control-label">Quantity</span>
                                                            <div class="box-quantity d-flex">
                                                                <input class="quantity mr-40" min="1" value="1" type="number">
                                                                <a class="add-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>add to cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-additional-info">
                                                            <div class="social-sharing">
                                                                <span>Share</span>
                                                                <ul>
                                                                    <li class="facebook"><a href="#" title="Share" target="_blank">Share</a></li>
                                                                    <li class="twitter"><a href="#" title="Tweet" target="_blank">Tweet</a></li>
                                                                    <li class="googleplus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                                                                    <li class="pinterest"><a href="" title="Pinterest" target="_blank">Pinterest</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product area -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- END Modal -->
</div>
<!-- QUICKVIEW PRODUCT END -->--}}
</div>
<!-- Body main wrapper end -->


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- jQuery Local -->
<script>window.jQuery || document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>')</script>

<!-- Popper min js -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap min js  -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- nivo slider pack js  -->
<script src="assets/js/jquery.nivo.slider.pack.js"></script>
<!-- All plugins here -->
<script src="assets/js/plugins.js"></script>
<!-- Main js  -->
<script src="assets/js/main.js"></script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>

@yield('scripts')
</body>
</html>

