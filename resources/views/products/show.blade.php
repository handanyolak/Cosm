@extends('layouts.homepage')
@section('content')
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
                                    <div id="content">
                                        <div class="js-qv-mask mask pos_content">
                                            <div class="product-images js-qv-product-images owl-carousel">
                                                <div class="thumb-container">
                                                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                        @foreach($product->photos as $photo)
                                                        <li class="active"><a href="#red" data-toggle="tab">
                                                                <img src="{{ $photo->link }}" alt="">
                                                            </a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cover">
                                            <div id="my-tab-content" class="tab-content">
                                                <div class="tab-pane active" id="red">
                                                    <img src="{{ $photo->link }}" alt="harosa single product">
                                                    <div class="layer hidden-sm-down">
                                                        <i class="material-icons zoom-in"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="h1 namne_details">{{ $product->name }}</h1>
                            <p class="reference">satıcı: cosm</p>
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
                                        <a href="#idTab5" class="reviews _mPS2id-h">Yorumları Oku (<span>57</span>)</a>
                                    </li>
                                    <li>
                                        <a class="open-comment-form">Yorum Yaz</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-prices">
                                <div class="product-discount">
                                    {{--<span class="regular-price">$23.90</span>--}}
                                </div>
                                <div class="product-price h5 has-discount">
                                    <div class="current-price">
                                        <span>{{ $product->price }}0 TL</span>
                                        <span class="discount discount-percentage">%8 İndirim</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-information">
                                <div class="product-desc">
                                    <p><span>Kapsamlı araştırma ve geliştirmeleri sonucu, paraben, mineral yağ ve trietanolamin gibi içerikler maddeler kullanmak yerine, daha hipoalerjenik ve iyi huylu, iyileştirici özelliklerde daha etkili olan doğal besin maddelerini tercih ediyor. </span></p>
                                </div>
                                <div class="product-actions">
                                    <form action="#">
                                        <div class="product-discounts"></div>
                                        <div class="product-add-to-cart">
                                            <span class="control-label">ADET</span>
                                            <div class="box-quantity d-flex">
                                                <input class="quantity mr-40" min="1" value="1" type="number">
                                                <a class="add-cart" href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
                                            </div>
                                        </div>
                                        <div class="product-additional-info">
                                            <div class="social-sharing">
                                                <span>Paylaş</span>
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
@endsection
