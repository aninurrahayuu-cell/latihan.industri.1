@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Biodata</div>

                <div class="card-body">

                    {{-- ✅ route disesuaikan dengan controller kamu --}}
                    {{-- <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data"> --}}
                    <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama</label>
                            {{-- ✅ ubah name="nama" jadi "nama_lengkap" --}}
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                        </div>
                        {{-- @error('nama_lengkap')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}
                        <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>

                        <input type="radio" name="jenis_kelamin" value="laki-laki" id="laki" required>
                        <label for="laki">Laki-laki</label>

                        <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" required>
                        <label for="perempuan">Perempuan</label>
                        </div>
                        {{-- <div class="mb-3">
                        <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div> --}}
                        {{-- @error('jenis_kelamin')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        </div>
                        {{-- @error('tanggal_lahir')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        {{-- @error('tempat_lahir')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="agama" class="form-control" id="">
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="buddha">Buddha</option>
                                <option value="hindu">Hindu</option>
                                <option value="konghucu">Konghucu</option>
                            </select>
                        </div>
                        {{-- @error('agama')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        {{-- @error('alamat')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                        </div>
                        {{-- @error('telepon')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        {{-- @error('email')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror --}}
                             <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Cover">
                            {{-- @error('cover')
                            <small style="color:red;">{{$message}}</small>
                            @enderror --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
