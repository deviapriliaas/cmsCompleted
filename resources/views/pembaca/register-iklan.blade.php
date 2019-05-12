@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-profile.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Picture</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" required autocomplete="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomor_ktp" class="col-md-4 col-form-label text-md-right">Nomor KTP</label>

                            <div class="col-md-6">
                                <input id="nomor_ktp" type="text" class="form-control" name="nomor_ktp" required autocomplete="nomor_ktp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomor_telepon" class="col-md-4 col-form-label text-md-right">Nomor Telepon</label>

                            <div class="col-md-6">
                                <input id="nomor_telepon" type="text" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autocomplete="nomor_telepom">
                            </div>
                        </div>


                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Create Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
