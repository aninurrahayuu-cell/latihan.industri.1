@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Murid</div>

                <div class="card-body">

               
            <form action="{{route('murid.update', $datamurid->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="{{$datamurid->nama_lengkap}}">
            </div>
                @error('nama_lengkap')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="{{$datamurid->jenis_kelamin}}">
            </div>
                @error('jenis_kelamin')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir" value="{{$datamurid->tanggal_lahir}}">
            </div>
                @error('tanggal_lahir')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="{{$datamurid->tempat_lahir}}">
            </div>
                @error('tempat_lahir')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama" value="{{$datamurid->agama}}">
            </div>
                @error('agama')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{$datamurid->alamat}}">
            </div>
                @error('alamat')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="{{$datamurid->email}}">
            </div>
                @error('email')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="form-group">
                <label>Nama Kelas</label>
                <select class="form-control" name="id_kelas">
                @foreach($datakelas as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $datamurid->id_kelas ? 'selected' : '' }}>{{ $data->nama_kelas }}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection