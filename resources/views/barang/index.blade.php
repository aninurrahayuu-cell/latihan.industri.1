@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Data Barang</div>

                <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Colse"></button>
                    </div>
                @endif
                <a href="{{route('barang.create')}}" class="btn btn-primary">Add</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama barang</th>
        <th scope="col">Merk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stock</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @php $id = 1; @endphp
    @foreach($barang as $data)
        <tr>
        <td>{{ $id++ }}</td>
        <td>{{ $data->nama_barang}}</td>
        <td>{{ $data->merk}}</td>
        <td>{{ $data->harga}}</td>
        <td>{{ $data->stock}}</td>
        <td>
        <a href="{{route('barang.edit', $data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('barang.show', $data->id)}}" class="btn btn-warning">Show</a>
        <form action="{{route('barang.destroy', $data->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin kah diks?')">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection