@extends('layouts.app')

@section('judul')

{{isset($galeri) ? 'Edit Galeri' : 'Create Galeri'}}

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
            <form action="{{isset($galeri) ? route('galeri.update',$galeri->id):route('galeri.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($galeri))
                @method('PUT')
            @endif
           
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{isset($galeri) ? $galeri->title : ''}}">
                
                </div>
             
                <div class="form-group">

                <label for="pictgambar">Image</label>
                <input type="file" name="pictgambar" id="pictgambar" class="form-control">

                </div>
                
                <div class="form-group">
                <label for="published_at">published_at</label>
                <input type="text" name="published_at" id="published_at" class="form-control"  value="{{isset($galeri) ? $galeri->published_at : ''}}">

                </div>
                
              
               
                <div class="from-group">
                <button type="submit" class="btn btn-success">galeri</button>
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
        enableTime:true,
        enableSeconds:true
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