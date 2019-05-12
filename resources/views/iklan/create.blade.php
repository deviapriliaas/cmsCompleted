@extends('layouts.app')

@section('judul')
{{isset($tag) ? 'Edit Gambar dan Waktu Iklan' : 'Create Adsense'}}
@endsection
@section('content')

 <div class="card card-default">
    <div class="card-header">{{isset($tag) ? 'Edit' :' Create'}}</div>

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
    <form action="{{route('iklan.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($tag))
        @method('PUT')
    @endif
        <div class="form-group">
        <label for="gambar_iklan">Gambar Iklan</label>
            <input type="file" class="form-control" id="gambar_iklan" name="gambar_iklan">
        </div>
        <div class="form-group">
                <label for="published_at">Tanggal Mulai Iklan</label>
                <input type="text" name="published_at" id="published_at" class="form-control"  value="{{isset($post) ? $post->published_at : ''}}">
        </div>

        <div class="form-group">
        <button class="btn btn-success mr-2">{{isset($tag) ? 'Edit' : 'Create'}}</button><a href="{{route('Tags.index')}}" class="btn btn-danger">Cancel</a>
        </div>
       </form>
       
    </div>
 
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