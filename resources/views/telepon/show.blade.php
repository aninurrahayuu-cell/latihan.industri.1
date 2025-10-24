@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Telepon</div>

                <div class="card-body">

               
            <form action="" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label>Nomor</label>
                <input type="text" class="form-control" name="nomor" value="{{$telepons->nomor}}" disabled>
            </div>
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" name="id_pengguna" value="{{ $telepons->pengguna->nama }}" disabled>
                </input>
            </div>
            <a href="{{route('telepon.index')}}" type="submit" class="btn btn-primary">Back</a>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection