@extends('layouts.single-post')

@section('header')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image:url('/mag/img/bg-img/49.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Single Post</h2>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('home')

<div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$single->categories->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$single->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
</div>

@endsection
@section('post')
<section class="post-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-thumb mb-30">
                        <img src="{{url('/image/'.$single->image)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{$single->published_at}}</a>
                                <a href="archive.html">{{$single->categories->name}}</a>
                            </div>
                            <h4 class="post-title">{{$single->title}}</h4>
                            <!-- Post Meta -->
                            <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                                <p>{!! $single->content !!}</p>
                           
                            <!-- Like Dislike Share -->
                            <div class="like-dislike-share my-5">
                                <h4 class="share">240<span>Share</span></h4>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                            </div>

                            <!-- Post Author -->
                           
                            <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                            @include('partials.disqus')
                            </div>

                    </div>
        </div>
                    <!-- Related Post Area -->
                    

                    <!-- Comment Area Start -->
                    
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
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
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Categories</h5>
                            </div>

                            <!-- Catagory Widget -->
                            <ul class="catagory-widgets">
                                @foreach($category as $category)
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$category->name}}</span> <span>{{$category->posts->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Tags</h5>
                            </div>

                            <!-- Single YouTube Channel -->
                            @foreach($tags as $tags)
                            <div class="single-youtube-channel d-flex">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/14.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="{{route('post.tag',$tags->id)}}" class="channel-title">{{$tags->name}}</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>
                            @endforeach


                        </div>

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
                </div>
            </div>
        </div>
       
</section>               
                  

@endsection
