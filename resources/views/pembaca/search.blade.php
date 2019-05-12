@extends('layouts.front')
  @section('content')

        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="section bg-gray">

                <div class="container">
                <div class="row">


                    <div class="col-md-8 col-xl-9">
                    <div class="row gap-y">
                    @forelse($all as $post)
                        <div class="col-md-6 col-lg-4" style="text-align:center">
                        <div class="card d-block border hover-shadow-6 mb-6">
                        <br>
                        <h5 class="mb-0" style=" margin-bottom: 0.67em;"><a class="text-dark" href="{{route('single',$post->id)}}">{{$post->title}}</a></h5>
                            <br>
                            <a href="#"><img style="width:200px;height:200px"class="card-img-top" src="{{ url('/image/'.$post->image) }}" alt="{{$post->title}}"></a>
                            <div class="p-6 text-center">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->categories->name}}</a></p>
                        
                            </div>
                        </div>
                        </div>
                    @empty
                    <p class="text-center">Not found <strong>{{request()->query('search')}}</strong></p>
                    @endforelse    

                    </div>


                    {{$all->appends(['search'=>request()->query('search')])->links()}}
                    </div>


                
                    

                </div>
</div>
</div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
       
@endsection