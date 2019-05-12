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
                    <th>Id Iklan</th>
                    <th>Gambar Iklan</th>
                    <th>Published_at</th>
                </thead>
        
              
        <tbody>
        @foreach($iklan as $data)
            <td>{{$data->id}}</td>
            <td>{{$data->gambar_iklan}}</td>
            <td>{{$data->published_at}}</td>
            <td>  
                    <a href="" class="btn btn-info">Edit</a>
                    <button class="btn btn-danger" onClick="HandleDelete({{$data->id}})">Delete</button>
            </td>
           
        </tbody>
        @endforeach 
        </table>
        
     
        <form action="" method="post" id="deleteCategoryForm">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Yakin Mau Hapus?
            </div>
            <div class="modal-footer">
                <button type="Submit" class="btn btn-primary">Ya, Yakin</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                
            </div>
            </div>
        </div>
        </div>

        
        </form>
  
       
    </div>
  
 </div>
 @else
 <h1 class="text-center">Sorry you doesn't have adsense</h1>
 @endif
 
 
@endsection

@section('scripts')

<script>
    function HandleDelete(id)
    {
        var form=document.getElementById('deleteCategoryForm')
        form.action='/Tags/'+id
        console.log('deleting',form)
        $('#deleteModal').modal('show')

    }
</script>

@endsection