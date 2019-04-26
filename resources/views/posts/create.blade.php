@extends('layouts.app')

@section('judul')

{{isset($post) ? 'Edit Post' : 'Create Post'}}

@endsection

@section('content')

<div class="card card-default">

    <div class="card-header text-center font-weight-bold"></div>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
        <ul class="list-group">
        <li class="list-group-item">
            {{$error}} 
        </li>
        
        </ul>
</div>
        @endforeach


    @endif

    <div class="card-body">
            <form action="{{isset($post) ? route('post.update',$post->id):route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($post))
                @method('PUT')
            @endif
           
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{isset($post) ? $post->title : ''}}">
                
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"> {{isset($post) ? $post->description: ''}}</textarea>   
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" value="{{isset($post) ? $post->content : ''}}">
                    <trix-editor input="content"></trix-editor>     
                </div>
                <div class="form-group">

                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">

                </div>
                <div class="form-group">
                <label for="categories_id">Category</label>
                <select name="categories_id" id="category" class="form-control">
                @foreach($categories as $data)
                <option value="{{$data->id}}" selected="
                @if(isset($post))
                    @if($data->id === $post->categories_id)
                        selected
                        {{$data->name}}
                    @endif
                @else
                
                @endif"
                >
                {{$data->name}}
                </option>
                @endforeach
                
                </select>
                </div>
                <div class="form-group">
                <label for="published_at">published_at</label>
                <input type="text" name="published_at" id="published_at" class="form-control"  value="{{isset($post) ? $post->published_at : ''}}">

                </div>
                
                <div class="from-group">
                @if($tags->count() > 0)
                     <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                     @foreach($tags as $tags)
                         <option value="{{$tags->id}}"
                            @if(isset($post))
                                @if($post->hasTag($tags->id))
                                    selected
                                @endif
                            @endif

                         
                         
                         >
                         {{$tags->name}}
                         
                         </option>
                    @endforeach
                        </select>
                        
                   
                 @endif
                </div>
               
                <div class="from-group">
                <button type="submit" class="btn btn-success">Post</button>
                </div>
           
            
            </form>
           
    
    </div>




@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

    flatpickr('#published_at',{
        minDate: "today",
        enableTime:true
    })
    $(".tags-selector").select2({
  tags: true
});
</script>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@endsection