@extends('layouts.single-post')
@section('post')
<div class="section bg-gray">

        <div class="container">
          <div class="row">
<div class="col-md-12 col-xl-9">
              <div class="row gap-y">
            @forelse($galeri as $post)
                <div class="col-md-12 col-lg-4"  style="color:black;text-align:center">
                <div class="card d-block border hover-shadow-6 mb-6">
                    <a href="#"><img style="width:300px"class="card-img-top" src="{{ url('/image/'.$post->pictGambar) }}" alt="Card image cap"></a>
                    <caption>{{$post->title}}</caption>
                </div>
                </div>
                
            @empty
            <p class="text-center">Not found <strong>{{request()->query('search')}}</strong></p>
            @endforelse    

              </div>


              
            </div>


            
            

          </div>
        </div>
      </div>
@endsection