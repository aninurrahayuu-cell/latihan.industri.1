@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">

               
            <form action="{{route('kelas.update', $kelas->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{$kelas->nama_kelas}}">
            </div>
                @error('nama_kelas')
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