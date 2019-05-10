@extends('layouts.app')

@section('judul')
User
@endsection

@section('content')
<div class="car card-default">

<div class="d-flex justify-content-end my-2"> <a href="{{route('post.create')}}" class="btn btn-success">Add Post</a></div>
    <div class="card-header">Post</div>

    <div class="card-body">
    @if($users->count() > 0)

    
            <table class="table">
                
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                @foreach($users as $user)
                <tbody>
                    <td><img src="{{Gravatar::src($user->email)}}" alt=""></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                    @if(!$user->isAdmin())
                    <td>
                        <form action="{{route('users.users.make-admin',$user->id)}}" method="post">
                            @csrf
                                <button type="submit" class="btn btn-success">Make Admin</button>
                        
                        </form>
                    
                    
                    </td>
                    @endif
                @endforeach
                
                </table>
               
                
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
