@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Data Telepon</div>

                <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Colse"></button>
                    </div>
                @endif
                <a href="{{route('telepon.create')}}" class="btn btn-primary">Add</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nomor</th>
        <th scope="col">Id Pengguna</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @php $id = 1; @endphp
    @foreach($datatelepon as $data)
        
  
        <tr>
        <td>{{ $id++ }}</td>
        <td>{{ $data->nomor}}</td>
        <td>{{ $data->pengguna->nama }}</td>
        <td>
        <a href="{{route('telepon.edit', $data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('telepon.show', $data->id)}}" class="btn btn-warning">Show</a>
        <form action="{{route('telepon.destroy', parameters: $data->id)}}" method="POST">
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