@extends('layouts.app')

@section('judul')
List Your Iklan
@endsection

@section('content')

<div class="d-flex justify-content-end">
    <a href="{{route('iklan.create')}}" class="btn btn-success mb-2">Beriklan?</a>
</div>
 <div class="card card-default">
    <div class="card-header">Iklan Anda</div>
 @if($iklan->count() > 0)
    <div class="card-body">
    <table class="table">
                <thead>
                    <th>User Id</th>
                    <th>Avatar</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Nomor KTP</th>
                </thead>
        
              
        <tbody>
        @foreach($iklan as $data)
        
            <td>{{$data->user_id}}</td>
            <td><img width="300px" src="{{url('/image/'.$data->avatar)}}" alt=""></td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->nomor_telepon}}</td>
            <td>{{$data->nomor_ktp}}</td>
           
        </tbody>
        @endforeach 
        </table>
        
  
       
    </div>
  
 </div>
 @else
 <h1 class="text-center">Sorry you doesn't have any account of adsense</h1>
 @endif
 
 
@endsection
