@extends('layouts.homepage')

@section('content')
    <!-- top breadcrumb -->
    <div class="top_breadcrumb">
        <div class="breadcrumb_container ">
            <div class="container">
                <nav data-depth="3" class="breadcrumb">
                    <ol>
                        <li><a href="{{ route('anasayfa') }}"><span>Anasayfa</span></a></li>
                        <li><a href="{{ route('product.index') }}"><span>Tüm  Ürünler</span></a></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->

    <!-- Shop page wraper -->
    <div class="shop-page-wraper">
        <div class="container">
            <div class="row">
                {{--<div class="col-xs-12 col-md-3 sidebar-shop">
                    <div class="sidebar-product-categori">
                        <div class="shop-categori-title">
                            <h3>Arts & Crafts</h3>
                        </div>
                        <div class="product-filter mb-30">
                            <div class="widget-title">
                                <h3>Filter by price</h3>
                            </div>
                            <div class="widget-content">
                                <div id="price-range"></div>
                                <div class="price-values">
                                    <div class="price_text_btn">
                                        <span>Price:</span>
                                        <input type="text" class="price-amount">
                                    </div>
                                    <button class="button" type="submit">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="facet">
                            <h3>Color</h3>
                            <div class="widget-content">
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <a href="#">Gold</a>
                                        <span class="count">(6)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Green</a>
                                        <span class="count">(4)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">White</a>
                                        <span class="count">(8)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="facet">
                            <h3>Size</h3>
                            <div class="widget-content">
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <a href="#">S</a>
                                        <span class="count">(3)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">M</a>
                                        <span class="count">(5)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">L</a>
                                        <span class="count">(2)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">XL</a>
                                        <span class="count">(7)</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
--}}{{--                        <div class="advertising">
                            <a href="shop.html"><img src="assets/images/banner/advertising.jpg" alt="harosa images"></a>
                        </div>--}}{{--
                    </div>

                </div>--}}
                <div class="col-xs-12 col-md-9 shop-content" style="margin-left: auto; margin-right: auto;">
                    <div class="product-toolbar">
                        <div class="topbar-title">
                            <h1>Tüm Ürünler</h1>
                        </div>
                        <div class="product-toolbar-inner">
                            <div class="product-view-mode">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#grid"><i class="ion-grid"></i></a></li>
                                    <li><a data-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                            <div class="woocommerce-ordering">
                                <form method="GET" action="{{ route('product.index') }}" class="woocommerce-ordering hidden-xs" >
                                @csrf
                                    <div class="orderby-wrapper">
                                        <label>Fiyata Göre Sırala :</label>
                                        <select class="nice-select-menu orderby" name="sort" onchange="this.form.submit()">
                                            <option value="0">Seçiniz</option>
                                            <option value="artan">Artan</option>
                                            <option value="azalan">Azalan</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <p class="woocommerce-result-count">Bu Sayfada  Toplam {{ $products->count() }} Ürün Gösterilmektedir.</p>
                        </div>
                        <div class="shop-page-product-area tab-content">
                            <div id="grid" class="tab-pane fade in show active">
                                <div class="row">
                                    <!-- single product -->
                                    @foreach($products as $product)
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                                    <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}" title="{{ $product->name }}">
                                                </a>
{{--                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>--}}
                                                <div class="quick-view">
                                                    <a href="{{ route('product.show',$product) }}" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_desc">
{{--                                                <div class="manufacturer">
                                                    <a href="shop.html">Studio Design</a>
                                                </div>--}}
                                                <h1> <a href="{{ route('product.show',$product) }}" class="product_name" title="{{ $product->name }}">{{ $product->name }}</a></h1>
                                                <div class="product-price-and-shipping">
                                                    {{--<span class="regular-price">$23.90</span>--}}
                                                    <span class="price price-sale">{{ $product->price }}0 TL</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{ route('cart') }}">Sepete Ekle</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single product end -->
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    <!-- single product list view -->
                                    @foreach($products as $product)
                                    <div class="col-md-12">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                                    <img src="{{ $product->thumbnail }}" alt="harosa product">
                                                </a>
{{--                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>--}}
                                                <div class="quick-view">
                                                    <a href="{{ route('product.show',$product) }}" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_desc">
{{--                                                <div class="manufacturer">
                                                    <a href="shop.html">Studio Design</a>
                                                </div>--}}
                                                <h1><a href="{{ route('product.show',$product) }}" class="product_name" title="{{ $product->name }}">{{ $product->name }}</a></h1>
                                                <div class="product-desc">
                                                    <p><span>Kapsamlı araştırma ve geliştirmeleri sonucu, paraben, mineral yağ ve trietanolamin gibi içerikler maddeler kullanmak yerine, daha hipoalerjenik ve iyi huylu, iyileştirici özelliklerde daha etkili olan doğal besin maddelerini tercih ediyor.  </span></p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    {{--<span class="regular-price">$23.90</span>--}}
                                                    <span class="price price-sale">{{ $product->price }}0 TL</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{ route('cart') }}">Sepete Ekle</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single product list view end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <li>{{ $products->withQueryString()->links('vendor.pagination.bootstrap-4') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop page wraper end -->

@endsection
