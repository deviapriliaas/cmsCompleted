@extends('layouts.app')
@section('judul')
Galeri
@endsection

@section('content')
<div class="car card-default">

<div class="d-flex justify-content-end my-2"> <a href="{{route('galeri.create')}}" class="btn btn-success">Add galeri</a></div>
    <div class="card-header">galeri</div>

    <div class="card-body">
    @if($galeris->count() > 0)

    
            <table class="table">
                
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Published At</th>
                
                </thead>
                @foreach($galeris as $galeri)
                <tbody>
                    
                  
                    <td><img src="{{ url('/image/'.$galeri->pictGambar) }}" width="60" height="60"></td>
                    <td>{{$galeri->title}}</td>
                    <td>{{$galeri->published_at}}</td>
                    <td><a href="{{route('galeri.edit',$galeri->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('galeri.destroy',$galeri->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                    
                </tbody>
               
                @endforeach
                
                </table>
                {{$galeris->links()}}
               
    @else
        <h2 class="text-center">NOT galeri</h2>
    @endif

    
    </div>


</div>

@endsection
@section('scripts')
<script>
    function HandleDelete(id)
    {
        var form=document.getElementById('deleteCategoryForm')
        form.action='/galeri/'+id
        console.log('deleting',form)
        $('#deleteModal').modal('show')

    }
</script>
<script>
    function HandleRestore(id)
    {
        var form=document.getElementById('RestoreForm')
        form.action='/restore-galeri/'+id
        console.log('restore',form)
        $('#restoreModal').modal('show')

    }
</script>
@endsection
