@extends('layouts.app')

@section('judul')
Categories
@endsection

@section('content')

<div class="d-flex justify-content-end">
    <a href="{{route('categories.create')}}" class="btn btn-success mb-2"> Add categories</a>
</div>
 <div class="card card-default">
    <div class="card-header">Categories</div>
    @foreach($category as $data)
    <div class="card-body">
    <table class="table">
                <thead>
                    <th>Name Of Categories</th>
                    <th>Count Of Post</th>
                    <th>Action</th>
                
                </thead>
        
      
        <tbody>
       
            <td>{{$data->name}}</td>
            <td>{{$data->posts->count()}}</td>
            <td>  
                    <a href="{{route('categories.edit',$data->id)}}" class="btn btn-info">Edit</a>
                    <button class="btn btn-danger" onClick="HandleDelete({{$data->id}})">Delete</button>
            </td>
        </tbody>
       
        </table>
     
        <form action="{{route('categories.destroy',$data->id)}}" method="post" id="deleteCategoryForm">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus {{$data->name}}</h5>
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
    @endforeach
 </div>
 
 
@endsection

@section('scripts')

<script>
    function HandleDelete(id)
    {
        var form=document.getElementById('deleteCategoryForm')
        form.action='/categories/'+id
        console.log('deleting',form)
        $('#deleteModal').modal('show')

    }
</script>

@endsection