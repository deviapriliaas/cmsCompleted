@extends('layouts.app')

@section('judul')
{{isset($category) ? 'edit' : 'create'}}
@endsection
@section('content')

 <div class="card card-default">
    <div class="card-header">{{isset($category) ? 'Edit Category' :' Create Category'}}</div>

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
    <form action="{{isset($category) ? route('categories.update',$category->id) : route('categories.store')}}" method="POST">
    @csrf
    @if(isset($category))
        @method('PUT')
    @endif
        <div class="form-group">
        <label for="name">Name Of Category</label>
            <input type="text" class="form-control" id="name" name="name" value="{{isset($category) ? $category->name : ''}}">
        </div>
        <div class="form-group">
        <button class="btn btn-success mr-2">{{isset($category) ? 'Edit' : 'Create'}}</button><a href="{{route('categories.index')}}" class="btn btn-danger">Cancel</a>
        </div>
       </form>
       
    </div>
 
 </div>
@endsection