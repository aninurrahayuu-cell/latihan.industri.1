@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Barang</div>

                <div class="card-body">

               
            <form action="" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}" disabled>
            </div>
            <div class="mb-3">
                <label>Merk</label>
                <input type="text" class="form-control" name="merk" value="{{$barang->merk}}" disabled>
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{$barang->harga}}" disabled>
            </div>
            <div class="mb-3">
                <label>Stock</label>
                <input type="text" class="form-control" name="stock" value="{{$barang->stock}}" disabled>
            </div>
            <a href="{{route('barang.index')}}" type="submit" class="btn btn-primary">Back</a>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection