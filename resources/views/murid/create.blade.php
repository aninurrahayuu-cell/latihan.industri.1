@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Murid</div>

                <div class="card-body">

            <form action="{{route('murid.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                @error('nama_lengkap')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin">
                @error('jenis_kelamin')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                @error('tanggal_lahir')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat Lahir">
                @error('tempat_lahir')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama" placeholder="Agama">
                @error('agama')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="textarea" class="form-control" name="alamat" placeholder="Alamat">
                @error('alamat')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
                @error('email')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama Kelas</label>
                <select class="form-control" name="id_kelas">
                @foreach($datakelas as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
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