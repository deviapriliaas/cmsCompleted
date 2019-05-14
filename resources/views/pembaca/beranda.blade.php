@extends('layouts.front')

@section('title')

 Beranda

@endsection


 @section('content')
       <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
           <!-- Trending Now Posts Area -->
           <div class="trending-now-posts mb-30">
               <!-- Section Title -->
               <div class="section-heading">
                   <h5>Latest Post</h5>
               </div>

               <div class="trending-post-slides owl-carousel">
                   <!-- Single Trending Post -->
                   @forelse($all as $all)
                   <div class="single-trending-post">
                       <img src="{{url('/image/'.$all->image)}}" alt="">
                       <div class="post-content">
                           <a href="#" class="post-cata">{{$all->title}}</a>
                           <a href="video-post.html" class="post-title">{{$all->description}}</a>
                       </div>
                   </div>
                   @empty
                    <p class="text-center">Not found <strong>{{request()->query('search_query')}}</strong></p>
                   @endforelse

               </div>
           </div>

           <!-- Feature Video Posts Area -->
           <div class="feature-video-posts mb-30">
               <!-- Section Title -->
               <div class="section-heading">
                   <h5>Beranda</h5>
               </div>

               <div class="featured-video-posts">
                    <div class="row">
                    
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            @foreach($life as $life)
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="{{url('/image/'.$life->image)}}" alt="">
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">{{$life->published_at}}</a>
                                        <a href="archive.html">{{$life->categories->name}}</a>
                                    </div>
                                <p>{{$life->description}}</p>    
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    @foreach($post as $all)
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="{{url('/image/'.$all->image)}}" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="{{route('beranda.post',$all->id)}}" class="post-title">{{$all->title}}</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- Single Blog Post -->
 
                                    <!-- Single Blog Post -->
  

                            </div>
                        </div>
                    </div>
                </div>
           </div>

           <!-- Most Viewed Videos -->
           <div class="most-viewed-videos mb-30">
               
           </div>

           <!-- Sports Videos -->
           <div class="sports-videos-area">
               
               <!-- Section Title -->
               <div class="section-heading">
                   <h5>Liputan Khusus</h5>
               </div>

               <div class="sports-videos-slides owl-carousel mb-30">
                   <!-- Single Featured Post -->
                   @foreach($khusus as $entry)
                   <div class="single-featured-post">
                       <!-- Thumbnail -->
                       <div class="post-thumbnail mb-50">
                           <img src="{{url('/image/'.$entry->image)}}" alt="">
                           <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                       </div>
                       <!-- Post Contetnt -->
                       <div class="post-content">
                           <div class="post-meta">
                               <a href="#">{{$entry->published_at}} - </a>
                               <a href="archive.html">{{$entry->categories->name}}</a>
                               @foreach($entry->tags as $tag)
                               <a href="archive.html">{{$tag->name}}</a>
                               @endforeach
                           </div>
                           <a href="{{route('beranda.post',$entry->id)}}" class="post-title">{{$entry->title}}</a>
                          <p>{{$entry->description}}</p>
                       </div>
                       <!-- Post Share Area -->
                       <div class="post-share-area d-flex align-items-center justify-content-between">
                           <!-- Post Meta -->
                           <div class="post-meta pl-3">
                               <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                               <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                               <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                           </div>
                           <!-- Share Info -->
                           <div class="share-info">
                               <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                               <!-- All Share Buttons -->
                               <div class="all-share-btn d-flex">
                                   <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                   <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                   <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                   <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   @endforeach
               </div>

               

          
           </div>
       </div>
    </div>
</div>

       <!-- >>>>>>>>>>>>>>>>>>>>
        Post Right Sidebar Area
       <<<<<<<<<<<<<<<<<<<<< -->
      
@endsection