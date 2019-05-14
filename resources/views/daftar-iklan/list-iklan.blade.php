@extends('layouts.app')

@section('judul')
List Your Iklan
@endsection

@section('content')

<div class="d-flex justify-content-end">
    <a href="{{route('iklan.create')}}" class="btn btn-success mb-2">Beriklan?</a>
</div>
 <div class="card card-default">
    <div class="card-header">Iklan Yang Sudah Dibayar</div>
 @if($iklan->count() > 0)
    <div class="card-body">
    <table class="table">
                <thead>
                    <th>Id Iklan</th>
                    <th>Gambar Iklan</th>
                    <th>Nomor Bukti Referensi</th>
                    <th>Tanggal Iklan</th>
                </thead>
        
              
        <tbody>
        @foreach($iklan as $data)
        
            <td>{{$data->id_iklan}}</td>
            <td><img width="300px" src="{{url('/image/'.$data->gambar_iklan)}}" alt=""></td>
            <td>{{$data->no_bukti_ref}}</td>
            <td>{{$data->published_at}}</td>
           
        </tbody>
        @endforeach 
        </table>
       
        <h4>Iklan Yang Belum Dibayar</h4>
 <table class="table">
                <thead>
                    <th>Id Iklan</th>
                    <th>Gambar Iklan</th>
                </thead>
        
              
        <tbody>
        @foreach($all as $dati)
        
            <td>{{$dati->id_iklan}}</td>
            <td><img width="300px" src="{{url('/image/'.$dati->gambar_iklan)}}" alt=""></td>
          
           
        </tbody>
        @endforeach 
</table>
    </div>
  
 </div>
 @else
<h1>Daftar Iklan Yang Belum Di bayar</h1>
 <table class="table">
                <thead>
                    <th>Id Iklan</th>
                    <th>Gambar Iklan</th>
                </thead>
        
              
        <tbody>
        @foreach($all as $dati)
        
            <td>{{$dati->id_iklan}}</td>
            <td><img width="300px" src="{{url('/image/'.$dati->gambar_iklan)}}" alt=""></td>
          
           
        </tbody>
        @endforeach 
</table>
 @endif
 
     
 
 
@endsection
