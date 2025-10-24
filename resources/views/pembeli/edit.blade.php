@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pembeli</div>

                <div class="card-body">

               
            <form action="{{route('pembeli.update', $pembeli->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}">
            </div>
                @error('nama_pembeli')
                    <small style="color:red;">{{$message}}</small>
                @enderror
             <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="{{$pembeli->jenis_kelmain}}">
            </div>
                @error('jenis_kelamin')
                    <small style="color:red;">{{$message}}</small>
                @enderror
             <div class="mb-3">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}">
            </div>
                @error('telepon')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection