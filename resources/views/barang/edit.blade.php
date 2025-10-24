@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Barang</div>

                <div class="card-body">

               
            <form action="{{route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
            </div>
                @error('nama_barang')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Merk</label>
                <input type="text" class="form-control" name="merk" value="{{$barang->merk}}">
            </div>
                @error('merk')
                    <small style="color:red;">{{$message}}</small>
                @enderror    
            <div class="mb-3">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{$barang->harga}}">
            </div>
                @error('harga')
                    <small style="color:red;">{{$message}}</small>
                @enderror  
            <div class="mb-3">
                <label>Stock</label>
                <input type="text" class="form-control" name="stock" value="{{$barang->stock}}">
            </div>
                @error('stock')
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