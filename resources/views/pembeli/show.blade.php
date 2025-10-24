@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Pembeli</div>

                <div class="card-body">

               
            <form action="" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label>Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}" disabled>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="{{$pembeli->jenis_kelamin}}" disabled>
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}" disabled>
            </div>
            <a href="{{route('pembeli.index')}}" type="submit" class="btn btn-primary">Back</a>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection