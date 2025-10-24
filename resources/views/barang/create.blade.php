@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Barang</div>

                <div class="card-body">

               
            <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                @error('nama_barang')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Merk</label>
                <input type="text" class="form-control" name="merk" placeholder="Merk">
                @error('merk')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Harga">
                @error('harga')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Stock</label>
                <input type="text" class="form-control" name="stock" placeholder="Stock">
                @error('stock')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection