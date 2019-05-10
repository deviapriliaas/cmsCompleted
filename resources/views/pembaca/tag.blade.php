@extends('lays.app')
@section('content')
<div class="section bg-gray">

        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">
            @forelse($all as $post)
                <div class="col-md-6 col-lg-4">
                <div class="card d-block border hover-shadow-6 mb-6">
                    <a href="#"><img style="width:300px"class="card-img-top" src="{{ url('/image/'.$post->image) }}" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                    <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->categories->name}}</a></p>
                    <h5 class="mb-0"><a class="text-dark" href="{{route('single',$post->id)}}">{{$post->title}}</a></h5>
                    </div>
                </div>
                </div>
            @empty
            <p class="text-center">Not found <strong>{{request()->query('search')}}</strong></p>
            @endforelse    

              </div>


              {{$all->appends(['search'=>request()->query('search')])->links()}}
            </div>


            @include('partials.sidebar')
            

          </div>
        </div>
      </div>
@endsection