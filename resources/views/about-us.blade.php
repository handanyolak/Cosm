@extends('layouts.homepage')
@section('content')
    <!-- top breadcrumb -->
    <div class="top_breadcrumb">
        <div class="breadcrumb_container ">
            <div class="container">
                <nav data-depth="3" class="breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ route('anasayfa') }}">
                                <span>Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">
                                <span>Hakkımızda</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->
    <!-- About page area -->
    <div class="about-page-area">
        <div class="about__us_page_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xs-12">
                        <div class="banner_h2__left_image">
                            <img alt="" src="assets/images/banner/about-us-img1.jpg">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6  col-xs-12">
                        <div class="banner_h2_Right_text">
                            <div class="wpb_wrapper">
                                <h3>COSM</h3>
                                <p>Cosm.com yalnızca ürün tedarik edip müşteriye ulaştırmak için çalışan bir aracı veya yatırımcı firma değildir. Esas olarak bilgiye ve bilinçlendirmeye aracıdır. Yaşamımızın her döneminde cilt bakımı konusunda ihtiyaç duyduğumuz temel bilgileri kullanıcılara aşılamayı, bilinçlendirmeyi ve her kullanıcının kendi için en doğru ürünleri tercih etmesini sağlamak için bilgiye yatırım yapar. Böylelikle gereksiz ürün tüketimini azaltmayı, müşterilerin kendileri için en doğru ürünleri bulmasını, dolayısıyla uzun vadede müşteri memnuniyeti kazanmayı hedefler.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About page area end-->

    <!-- footer start -->
    <footer id="footer" style="margin: 150px;">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="rows">
                        <div class="ft_newsletter">
                            <div id="block-newsletter-label">
                                <div class="title-newsletter">
                                    <h2>Üye Ol</h2>
                                    <p class="desc">(Abone olun ve %30 indirim kazanın!)</p>
                                </div>
                            </div>
                            <form action="#">
                                <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Abone Ol" type="submit">
                                <div class="input-wrapper">
                                    <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
            <!-- footer main -->
@endsection
