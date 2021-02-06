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
                            <a href="{{ route('cart') }}">
                                <span>Sepet</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->
    <!-- cart page content -->
    <div class="cart-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Form Start -->
                    <form action="#">
                        <!-- Table Content Start -->
                        <div class="table-content table-responsive mb-50">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Ürün Resmi</th>
                                    <th class="product-name">Ürün</th>
                                    <th class="product-price">Fiyat</th>
                                    <th class="product-quantity">Adet</th>
                                    <th class="product-subtotal">Toplam</th>
                                    <th class="product-remove">Kaldır</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{ $product->thumbnail }}" alt="cart-image"></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $product->name }}</a></td>
                                    <td class="product-price"><span class="amount">{{ $product->price }}0 TL</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">{{ $product->price }}0 TL</td>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Content Start -->
                        <div class="row">
                            <!-- Cart Button Start -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <input type="submit" value="SEPETİ GÜNCELLE">
                                    <a href="{{ route('anasayfa') }}">ALIŞVERİŞE DEVAM ET</a>
                                </div>
                            </div>
                            <!-- Cart Button Start -->
                            <!-- Cart Totals Start -->
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>SİPARİŞ ÖZETİ</h2>
                                    <br>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Ara Toplam</th>
                                            <td><span class="amount">29.80 TL</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Toplam</th>
                                            <td>
                                                <strong><span class="amount">29.80 TL</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{ route('checkout') }}">Satın Al</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart Totals End -->
                        </div>
                        <!-- Row End -->
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- cart page content end -->

    <!-- footer start -->
    <footer id="footer" style="margin-bottom: 150px;">
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
                                    <input name="email" value="" placeholder="E-mail Adresiniz" aria-labelledby="block-newsletter-label" type="text">
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
