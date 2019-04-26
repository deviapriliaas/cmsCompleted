@extends('layouts.app')

@section('judul')
Tags
@endsection

@section('content')

<div class="d-flex justify-content-end">
    <a href="{{route('Tags.create')}}" class="btn btn-success mb-2"> Add Tags</a>
</div>
 <div class="card card-default">
    <div class="card-header">Tags</div>
 
    <div class="card-body">
    <table class="table">
                <thead>
                    <th>Name Of Tags</th>
                    <th>Count Of page</th>
                    <th>Action</th>
                </thead>
        
              
        <tbody>
        @foreach($category as $data)
            <td>{{$data->name}}</td>
            <td>{{$data->posts->count()}}</td>
            <td>  
                    <a href="{{route('Tags.edit',$data->id)}}" class="btn btn-info">Edit</a>
                    <button class="btn btn-danger" onClick="HandleDelete({{$data->id}})">Delete</button>
            </td>
           
        </tbody>
        @endforeach    
        </table>
     
        <form action="{{route('Tags.destroy',$data->id)}}" method="post" id="deleteCategoryForm">
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
   
 </div>
 
 
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