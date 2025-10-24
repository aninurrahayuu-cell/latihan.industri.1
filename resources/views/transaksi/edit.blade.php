@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Transaksi</div>

                <div class="card-body">

               
            <form action="{{route('transaksi.update', $datatransaksi->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Tanggal Transaksi</label>
                <input type="date" class="form-control" name="tanggal_transaksi" value="{{$datatransaksi->tanggal_transaksi}}">
            </div>
                @error('tanggal_transaksi')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" value="{{$datatransaksi->jumlah}}">
            </div>
                @error('jumlah')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="mb-3">
                <label>Total Harga</label>
                <input type="text" class="form-control" name="total_harga" value="{{$datatransaksi->total_harga}}">
            </div>
                @error('total_harga')
                    <small style="color:red;">{{$message}}</small>
                @enderror
            <div class="form-group">
                <label>Nama Barang</label>
                <select class="form-control" name="id_barang">
                @foreach($databarang as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $datatransaksi->id_barang ? 'selected' : '' }}>{{ $data->nama_barang }}</option>
                @endforeach
                </select>
            </div>
             <div class="form-group">
                <label>Nama Pembeli</label>
                <select class="form-control" name="id_pembeli">
                @foreach($datapembeli as $data)
                    <option value="{{ $data->id }}" {{ $data->id == $datatransaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
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