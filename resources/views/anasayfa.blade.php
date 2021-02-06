@extends('layouts.homepage')

@section('content')
    <!-- Slider area -->
    <div class="slider-area">
        <!-- slider start -->
        <div class="slider-inner">
            <div id="mainSlider" class="nivoSlider nevo-slider">
                <img src="assets/images/slider/1.png" alt="main slider" title="#htmlcaption1"/>
                <img src="//cdn.shopify.com/s/files/1/2768/7380/files/Isntree_hyaluronik_asit_sun_cream_1920x730.png" alt="main slider"/>
                <img src="//cdn.shopify.com/s/files/1/2768/7380/files/Isntree_hyaluronik_asit_line_slider_1920x730.png" alt="main slider"/>
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="slider-content slider-content-1 slider-animated-1 pull-right">
                                    <p class="hp1">Hafta Sonuna Özel...</p>
                                    <h2 class="htwo">40%</h2>
                                    <h1 class="hone" style="margin-bottom: 50px">'a varan indirim!</h1>
                                    <div class="button-1 hover-btn-2">
                                        <a href="{{ route('product.index') }}">ALIŞVERİŞE BAŞLA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </div>
    <!-- Slider area end -->
    <!-- Policy area -->
    <div class="policy-area">
        <div class="container">
            <div class="policy-area-inner">
                <div class="row">
                    <div class="col-sm-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-truck"></i></div>
                            <div class="txt_cms">
                                <h2>Ücretsiz Kargo</h2>
                                <p>Tüm siparişlerde ücretsiz gönderim</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-credit-card"></i></div>
                            <div class="txt_cms">
                                <h2>İade Garantisi</h2>
                                <p>30 gün içinde paranız iade</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-question-circle"></i></div>
                            <div class="txt_cms">
                                <h2>Online Destek</h2>
                                <p>7/24 online çevrimiçi destek</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-sun-o"></i></div>
                            <div class="txt_cms">
                                <h2>Güvenli Ödeme</h2>
                                <p>100% güvenli ödeme</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Policy area end -->
    <!-- categori mini product area -->
    <div class="categori-mini-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="pos-featured-products  product_block_container">
                        <div class="pos_title"><h2>öne çıkanlar</h2></div>
                    </div>
                    <div class=" pos_content row">
                        <div class="feature-item owl-carousel">
                            <div class="item-product">
                                <!-- mini product -->
                                @foreach($products1 as $product)
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <!-- mini product end -->

                            </div>
                            <div class="item-product">
                                <!-- mini product -->
                                @foreach($products2 as $product)
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- mini product end -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="pos-featured-products  product_block_container">
                        <div class="pos_title"><h2>en çok satanlar</h2></div>
                    </div>
                    <div class=" pos_content row">
                        <div class="feature-item owl-carousel">
                            <div class="item-product">
                                @foreach($products3 as $product)
                                <!-- mini product -->
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- mini product end -->

                            </div>
                            <div class="item-product">
                                @foreach($products4 as $product)
                                <!-- mini product -->
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- mini product end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="pos-featured-products  product_block_container">
                        <div class="pos_title"><h2>ÖNERİLENLER</h2></div>
                    </div>
                    <div class=" pos_content row">
                        <div class="feature-item owl-carousel">
                            <div class="item-product">
                                <!-- mini product -->
                                @foreach($products2 as $product)
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- mini product end -->

                            </div>
                            <div class="item-product">
                                @foreach($products4 as $product)
                                <!-- mini product -->
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{ route('product.show',$product) }}" class="thumbnail product-thumbnail">
                                            <img src="{{ $product->thumbnail }}" alt="">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('product.show',$product) }}" class="quick_view">
                                                <i class="fa fa-search"></i>
                                            </a>
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
{{--                                        <div class="manufacturer">
                                            <a href="#">Graphic Corner</a>
                                        </div>--}}
                                        <h1><a href="{{ route('product.show',$product) }}">{{ $product->name }}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="price ">{{ $product->price }}0 TL</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart"><a href="{{ route('cart') }}">Sepete Ekle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- mini product end -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- categori mini product area end -->
    <!-- ft newsletter -->
    <div class="ft_newsletter">
        <div class="container">
            <div class="content-newsletter">
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
    <!-- ft newsletter end -->
    <!-- home blog post -->
    <div class="home_blog_post_area general product_block_container">
        <div class="home_blog_post">
            <div class="container pos_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page_title_area pos_title">
                            <h3><a href="{{ route('blog.index') }}" style="color: #df9fbf;">Cosm Blog</a></h3>
                            <p> Cosm Blog ile içerik ve allerjen araştırmalarımızı okuyabilir ve kendinize en uygun ürünleri seçebilirsiniz.</p>
                        </div>
                        <div class="home_blog_post_inner row">
                            <div class="blog_slider owl-carousel">
                                @foreach($blogs as $blog)
                                <!-- single blog item -->{{--TODO--}}
                                <div class="item">
                                    <div class="blog_post">
                                        <div class="blog_post_content_top">
                                            <div class="post_thumbnail">
                                                <a href="{{ route('blog.show', $blog) }}" class="img_content">
                                                    <img src="assets/images/blog/{{ $blog->photo }}" alt="" style="width: 370px; color: pink" >
                                                </a>
                                                <a href="{{ route('blog.show', $blog) }}" class="read-more" onMouseOver="this.style.color='#000000'"
                                                   onMouseOut="this.style.color='{{--black--}}'" >Yazıyı Oku</a>
                                            </div>
                                            <div class="post_content">
                                                <div class="date_time">
                                                    <span class="day_time">6</span>
                                                    <span class="moth_time">Şubat</span>

                                                </div>
                                                <div class="content-inner">
                                                    <h4 class="post_title">{{ $blog->title }}</h4>
                                                    <div class="post_meta">
                                                        <span class="meta_date">
                                                            <i class="fa fa-calendar"></i>
                                                            6 Şubat, 2021
                                                        </span> / <span class="meta_author">
                                                            <i class="fa fa-user"></i>
                                                            Cosm
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- single blog item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home blog post end -->
@endsection
