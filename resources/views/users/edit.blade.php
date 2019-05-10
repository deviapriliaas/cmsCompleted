@extends('layouts.app')



@section('content')
<div class="container">
            <div class="card">
                    <div class="card-header">My Profil</div>

                    <div class="card-body">
                        <form action="{{route('users.update')}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                            
                            </div>
                            <div class="from-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                            
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        
                        </form>
                    </div>
            </div>
</div>
@endsection
