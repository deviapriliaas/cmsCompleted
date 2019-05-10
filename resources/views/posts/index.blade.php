@extends('layouts.app')
@section('judul')
Post
@endsection

@section('content')
<div class="car card-default">

<div class="d-flex justify-content-end my-2"> <a href="{{route('post.create')}}" class="btn btn-success">Add Post</a></div>
    <div class="card-header">Post</div>

    <div class="card-body">
    @if($all->count() > 0)

    
            <table class="table">
                
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                
                </thead>
                @foreach($all as $post)
                <tbody>
                    
                  
                    <td><img src="{{ url('/image/'.$post->image) }}" width="60px" height="60px"></td>
                    <td>{{$post->title}}</td>
                    <td>{{ str_limit($post->description) }}</td>
                    <td>{!! str_limit($post->content) !!}</td>
                    <td>{{$post->categories_id}}</td>
                    @if(!$post->trashed())
                     <td>Not trashed</td>
                    @else
                    <td>{{$post->deleted_at}}</td>
                    @endif
                    <td>
                    <ul class="list-group">

                   <li class="list-group-item float-right">
                    @if(!$post->trashed())
                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-info float-left">Edit</a>
                    @else
                    <button class="btn btn-success" onClick="HandleRestore({{$post->id}})">Restore</button>
                    @endif
                
                    
                    <button class="btn btn-danger" onClick="HandleDelete({{$post->id}})" type="submit">{{$post->trashed() ? 'Delete' :'Trash'}}</button>
                   
                    </li>
                    </ul>
                    </td>
                    
                </tbody>
                @endforeach
                
                </table>
                <form action="{{route('post.destroy',$post->id)}}" method="post" id="deleteCategoryForm" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus {{$post->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        {{$post->trashed() ? 'Yakin Mau Hapus?' : 'Yakin Mau Masukan Ke Trash?'}}
                        </div>
                        <div class="modal-footer">
                            <button type="Submit" class="btn btn-primary">Ya, Yakin</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>


                 </form>
                 <form action="{{route('restore-post',$post->id)}}" method="post" id="RestoreForm">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="restoreModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="RestoreLabel">Restore {{$post->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        Yakin Mau Restore?
                        </div>
                        <div class="modal-footer">
                            <button type="Submit" class="btn btn-primary">Ya, Yakin</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                       
                    
                    </form>
                    {{$all->links()}}
                
                
            
    @else
        <h2 class="text-center">NOT POST</h2>
    @endif

    
    </div>


</div>

@endsection
@section('scripts')
<script>
    function HandleDelete(id)
    {
        var form=document.getElementById('deleteCategoryForm')
        form.action='/post/'+id
        console.log('deleting',form)
        $('#deleteModal').modal('show')

    }
</script>
<script>
    function HandleRestore(id)
    {
        var form=document.getElementById('RestoreForm')
        form.action='/restore-post/'+id
        console.log('restore',form)
        $('#restoreModal').modal('show')

    }
</script>
@endsection
