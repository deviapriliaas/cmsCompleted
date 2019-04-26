@extends('layouts.app')

@section('judul')
{{isset($tag) ? 'edit' : 'create'}}
@endsection
@section('content')

 <div class="card card-default">
    <div class="card-header">{{isset($tag) ? 'Edit Tag' :' Create Tag'}}</div>

    <div class="card-body">
    @if($errors->any())
        
        <div class="alert alert-danger">
        
            <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">
                    {{$error}}
                </li>
            @endforeach    
            </ul>
        </div>
        
    @endif
    <form action="{{isset($tag) ? route('Tags.update',$tag->id) : route('Tags.store')}}" method="POST">
    @csrf
    @if(isset($tag))
        @method('PUT')
    @endif
        <div class="form-group">
        <label for="name">Name Of Tag</label>
            <input type="text" class="form-control" id="name" name="name" value="{{isset($tag) ? $tag->name : ''}}">
        </div>
        <div class="form-group">
        <button class="btn btn-success mr-2">{{isset($tag) ? 'Edit' : 'Create'}}</button><a href="{{route('Tags.index')}}" class="btn btn-danger">Cancel</a>
        </div>
       </form>
       
    </div>
 
 </div>
@endsection