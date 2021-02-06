@extends('layouts.homepage')
@section('content')
    <!-- top breadcrumb -->
    <div class="top_breadcrumb">
        <div class="breadcrumb_container">
            <div class="container">
                <nav data-depth="3" class="breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ route('anasayfa') }}">
                                <span>Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                <span>İletişim</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->
    <!-- Contact page content -->
    <div class="contact-page-area">
        <!-- contact form area -->
        <div class="contact-form-area" style="margin-bottom: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <div class="contact-form-inner">
                            <h2>BİZE ULAŞIN</h2>
                            <form action="mail.php" method="get">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Ad*" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Soyad*" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="E-mail*" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Konu*" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                          aria-invalid="false" placeholder="Mesaj*" required></textarea>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <input type="submit" value="Gönder" class="wpcf7-form-control wpcf7-submit button">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <div class="contact-address-area">
                            <h2>İLETİŞİM</h2>
                            <ul>
                                <li>
                                    <i class="fa fa-fax">&nbsp;</i> Adres : No 40 Baria Sreet 133/2 NewYork City</li>
                                <li>
                                    <i class="fa fa-phone">&nbsp;</i>0212 222 2222</li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>&nbsp;</i>info@cosm.com</li>
                            </ul>
                            <h3>
                                <strong>Çalışma Saatlerimiz</strong>
                            </h3>
                            <p>
                                <strong>Pazartesi – Pazar</strong>: &nbsp;09:00 – 21:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact form area end -->
    </div>
    <!-- Contact page content end -->
@endsection
