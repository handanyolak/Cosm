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
                            <a href="{{ route('blog.index') }}">
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Oku</span>
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
                <div class="col-xs-12 col-md-9" style="margin-left: auto; margin-right: auto;">
                    <div class="single-blog page-content blog-page blog-sidebar right-sidebar">
                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
{{--                                <div class="post-category">
                                    <a href="#">Fashion</a>
                                    <a href="#">WordPress</a>
                                </div>--}}
                                <h1><a href="">{{ $blog->title }}</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Cosm Tarfaından Gönderildi</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> 6 Şubat, 2021 </a>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href=""><img src="{{ asset('assets/images/blog/' . $blog->photo)  }}" alt="bege blog images" style="width: 650px;"></a>
                            </div>
                            <div class="postinfo-wrapper">
                                <p>{{ $blog->body }}</p>
{{--                                <div class="single-post-tag">
                                    <a class="comment-link" href="#">3 comments</a> / Tags: <a href="#" rel="tag">fashion</a>,
                                    <a href="#" rel="tag">t-shirt</a>, <a href="#" rel="tag">white</a>
                                </div>--}}
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
                        <!-- blog post end -->
{{--                        <div class="relatedposts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <!-- related post -->
                                <div class="relatedthumb col-md-4 col-sm-6">
                                    <div class="image">
                                        <img src="images/blog/related1.jpg" alt="">
                                    </div>
                                    <h4><a rel="external" href="single-blog.html">Libero lorem</a></h4>
                                    <span class="post-date"> September 4, 2017 </span>
                                </div>
                                <!-- related post end -->
                                <!-- related post -->
                                <div class="relatedthumb col-md-4 col-sm-6">
                                    <div class="image">
                                        <img src="images/blog/related2.jpg" alt="">
                                    </div>
                                    <h4><a rel="external" href="single-blog.html">Libero lorem</a></h4>
                                    <span class="post-date"> September 4, 2017 </span>
                                </div>
                                <!-- related post end -->
                                <!-- related post -->
                                <div class="relatedthumb col-md-4 col-sm-6">
                                    <div class="image">
                                        <img src="images/blog/related3.jpg" alt="">
                                    </div>
                                    <h4><a rel="external" href="single-blog.html">Libero lorem</a></h4>
                                    <span class="post-date"> September 4, 2017 </span>
                                </div>
                                <!-- related post end -->
                            </div>
                        </div>--}}
                    </div>
{{--                    <div class="comments-area">
                        <h3>3 comments</h3>
                        <ol class="commentlist">
                            <li>
                                <div class="single-comment">
                                    <div class="comment-avatar">
                                        <img src="images/blog/road-avatar.jpg" alt="comment image bege">
                                    </div>
                                    <div class="comment-info">
                                        <a href="#">admin</a>
                                        <div class="reply">
                                            <a href="#">Reply</a>
                                        </div>
                                        <span class="date">October 6, 2014 at 1:38 am</span>
                                        <p>just a nice post</p>
                                    </div>
                                </div>
                                <ol>
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-avatar">
                                                <img src="images/blog/avatar.jpg" alt="comment image bege">
                                            </div>
                                            <div class="comment-info">
                                                <a href="#">admin</a>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                                <span class="date">October 6, 2014 at 1:38 am</span>
                                                <p>just a nice post</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                        <ol class="commentlist">
                            <li>
                                <div class="single-comment">
                                    <div class="comment-avatar">
                                        <img src="images/blog/road-avatar.jpg" alt="comment image bege">
                                    </div>
                                    <div class="comment-info">
                                        <a href="#">admin</a>
                                        <div class="reply">
                                            <a href="#">Reply</a>
                                        </div>
                                        <span class="date">October 6, 2014 at 1:38 am</span>
                                        <p>just a nice post</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="comment-respond">
                        <h3>Leave a Reply </h3>
                        <small>Your email address will not be published. Required fields are marked *</small>
                        <form action="#">
                            <div class="text-filds">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                            </div>
                            <div class="comment-input">
                                <p class="comment-form-author">
                                    <label for="author">Name <span class="required">*</span></label>
                                    <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                </p>
                                <p class="comment-form-url">
                                    <label for="url">Website</label>
                                    <input id="url" name="url" type="text" value="" size="30" maxlength="200">
                                </p>
                            </div>
                            <div class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                            </div>
                        </form>
                    </div>--}}
                </div>
                {{--<div class="col-xs-12 col-md-3">
                    <div class="blog_sidebar">
                        <div class="row_products_side">
                            <div class="product_left_sidbar">
                                <div class="product-filter  mb-30">
                                    <h5>ARA </h5>
                                    <div class="search__sidbar">
                                        <div class="input_form">
                                            <input type="text" id="search_input" name="s" value="Ara..." class="input_text">
                                            <button id="blogsearchsubmit" type="submit" class="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-filter  mb-30">
                                    <h5>ARŞİV </h5>
                                    <div class="blog_Archives__sidbar">
                                        <ul>
                                            <li>
                                                <a href="#">Şubat 2021</a>&nbsp;(3)</li>
                                            <li>
                                                <a href="#">Ocak 2021</a>&nbsp;(5)</li>
                                            <li>
                                                <a href="#">Aralık 2020</a>&nbsp;(2)</li>
                                            <li>
                                                <a href="#">Kasım 2020</a>&nbsp;(4)</li>
                                            <li>
                                                <a href="#">Ekim 2020</a>&nbsp;(1)</li>
                                            <li>
                                                <a href="#">Eylül 2020</a>&nbsp;(3)</li>
                                            <li>
                                                <a href="#">Ağustos 2020</a>&nbsp;(5)</li>
                                            <li>
                                                <a href="#">Temmuz 2020</a>&nbsp;(2)</li>
                                            <li>
                                                <a href="#">Haziran 2020</a>&nbsp;(4)</li>
                                            <li>
                                                <a href="#">Mayıs 2020</a>&nbsp;(1)</li>
                                        </ul>
                                    </div>
                                </div>
                                --}}{{--<div class="product-filter  mb-30">
                                    <h5>Recent Posts</h5>
                                    <div class="blog_Archives__sidbar">
                                        <ul>
                                            <li> <a href="#">Blog image post</a>&nbsp;(1)</li>
                                            <li> <a href="#">Post with Gallery</a>&nbsp;(3)</li>
                                            <li><a href="#">Post with Audio</a>&nbsp;(4)</li>
                                            <li><a href="#">Post with Video</a>&nbsp;(1)</li>
                                            <li><a href="#">Post with Text</a>&nbsp;(1)</li>

                                        </ul>
                                    </div>
                                </div>--}}{{--
                                --}}{{--<div class="sidebar-single-banner">
                                    <a href="#">
                                        <img src="images/banner/shop-sidebar.jpg" alt="Banner">
                                    </a>
                                </div>--}}{{--
                                --}}{{--<div class="product-filter mb-30">
                                    <h5>product tags</h5>
                                    <div class="blog-tags">
                                        <a href="#">brand</a>
                                        <a href="#">black</a>
                                        <a href="#">white</a>
                                        <a href="#">chire</a>
                                        <a href="#">table</a>
                                        <a href="#">Lorem</a>
                                        <a href="#">ipsum</a>
                                        <a href="#">dolor</a>
                                        <a href="#">sit</a>
                                        <a href="#">amet</a>
                                    </div>
                                </div>--}}{{--
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- cart page content end -->
    <!-- footer start -->
    <footer id="footer">
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
            <!-- footer main -->
@endsection
