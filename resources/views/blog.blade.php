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
                            <a href="{{ route('blog.index') }}">
                                <span>Blog</span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- top breadcrumb end -->

    <!-- cart page content -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="page-content blog-page blog-sidebar text-center">
                        <!-- blog post -->
                        @foreach($blogs as $blog)
                        <article class="text-center">
                            <div class="blog-entry-header">
{{--                                <div class="post-category">
                                    <a href="#">Fashion</a>
                                    <a href="#">WordPress</a>
                                </div>--}}
                                <h1><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Cosm Tarafında Gönderildi</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> 6 Şubat, 2021 </a>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="{{ route('blog.show', $blog) }}"><img src="{{ asset('assets/images/blog/' . $blog->photo)  }}" alt="bege blog images" style="width: 600px;"></a>
                            </div>
                            <div class="postinfo-wrapper">
                                <p>{{ $blog->excerpt }}</p>
                                <a class="readmore button" href="{{ route('blog.show', $blog) }}">Yazıyı Oku</a>
                                <div class="social-sharing">
                                    <h3>Bu Gönderiyi Paylaş</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <!-- blog post end -->
{{--                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    <a href="#">GALLERY</a>
                                    <a href="#">WordPress</a>
                                </div>
                                <h1><a href="single-blog.html">POST WITH GALLERY</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Posted by admin</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> March 10, 2018 </a>
                                </div>
                            </div>
                            <div class="gallery-post  owl-carousel">
                                <img src="images/blog/blog2.jpg" alt="bege blog images">
                                <img src="images/blog/blog3.jpg" alt="bege blog images">
                                <img src="images/blog/blog4.jpg" alt="bege blog images">
                            </div>
                            <div class="postinfo-wrapper">
                                <br>
                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                <a class="readmore button" href="single-blog.html">Read more</a>
                                <div class="social-sharing">
                                    <h3>Share this post</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- blog post end -->
                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    <a href="#">VIDEOS</a>
                                </div>
                                <h1><a href="single-blog.html">POST WITH VIDEO</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Posted by admin</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> March 10, 2018 </a>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <iframe src="https://www.youtube.com/embed/Q6dsRpVyyWs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="postinfo-wrapper">
                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                <a class="readmore button" href="single-blog.html">Read more</a>
                                <div class="social-sharing">
                                    <h3>Share this post</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- blog post end -->
                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    <a href="#">AUDIO</a>
                                    <a href="#">WordPress</a>
                                </div>
                                <h1><a href="single-blog.html">POST WITH AUDIO</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Posted by admin</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> March 10, 2018 </a>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <iframe width="100%" height="auto" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68283293&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                            </div>
                            <div class="postinfo-wrapper">
                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                <a class="readmore button" href="single-blog.html">Read more</a>
                                <div class="social-sharing">
                                    <h3>Share this post</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- blog post end -->
                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    <a href="#">Fashion</a>
                                    <a href="#">WordPress</a>
                                </div>
                                <h1><a href="single-blog.html">Blog image post</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Posted by admin</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> March 10, 2018 </a>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="images/blog/blog5.jpg" alt="bege blog images"></a>
                            </div>
                            <div class="postinfo-wrapper">
                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                <a class="readmore button" href="single-blog.html">Read more</a>
                                <div class="social-sharing">
                                    <h3>Share this post</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- blog post end -->--}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li>{{ $blogs->withQueryString()->links('vendor.pagination.bootstrap-4') }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart page content end -->

    <!-- footer start -->
    <footer id="footer" style="margin-bottom: 100px;">
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

