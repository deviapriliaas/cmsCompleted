@extends('layouts.single-post')

@section('style')
<link rel="stylesheet" href="{{asset('css/grid.css')}}">
@endsection
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
@section('post')

       <div class="row">
       @foreach($galeri as $data)
          <div class="column">
                <img class="koloming" src="{{url('/image/'.$data->pictGambar)}}" width="100%" alt="">
          </div>
        @endforeach
       </div> 
@endsection