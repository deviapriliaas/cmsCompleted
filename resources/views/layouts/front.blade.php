<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('mag/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('mag/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="{{asset('mag/img/core-img/logo.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{url('/')}}">Beranda</a></li>
                                    <li><a href="{{route('galeri')}}">Galeri Foto</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{route('search')}}" method="GET">
                                    <input type="search" name="search_query" id="topSearch" placeholder="Search">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="{{route('login')}}" class="login-btn">Admin  <i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            <a href="{{route('register')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Register Iklan</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/1..jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/2..jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/3..jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">MAY 8, 2018</a>
                                <a href="archive.html">lifestyle</a>
                            </div>
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Tags</h5>
                </div>

                <!-- Single YouTube Channel -->
                @foreach($tags as $tag)
                <div class="single-youtube-channel d-flex">
                   
                    <div class="youtube-channel-content">
                        <a href="single-post.html" class="channel-title">{{$tag->name}}</a>
                        <a href="{{route('post.tag',$tag->id)}}" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>
                @endforeach


            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
            @foreach($iklan as $left)
                <a class="add-img"><img src="{{url('/image/'.$left->gambar_iklan)}}" alt=""></a>
            @endforeach
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">

            </div>
        </div>
        @yield('content')
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Categories</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    @foreach($category as $data)
                    <li><a href="{{route('find',$data->id)}}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$data->name}}</span> <span>{{$data->posts->count()}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
            @foreach($iklan as $iklan)
                <a class="add-img"><img src="{{url('/image/'.$iklan->gambar_iklan)}}" alt=""></a>
            @endforeach
            </div>

            <!-- Sidebar Widget -->
            

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="{{asset('mag/img/core-img/logo2.png')}}" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset('mag/img/bg-img/12..jpg')}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset('mag/img/bg-img/13..jpg')}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('mag/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('mag/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('mag/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('mag/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('mag/js/active.js')}}"></script>
</body>

</html>