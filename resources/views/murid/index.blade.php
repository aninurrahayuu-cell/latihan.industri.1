@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Murid</div>

                <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Colse"></button>
                    </div>
                @endif
                <a href="{{route('murid.create')}}" class="btn btn-primary">Add</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Agama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Id Kelas</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @php $id = 1; @endphp
    @foreach($datamurid as $data)
        
  
        <tr>
        <td>{{ $id++ }}</td>
        <td>{{ $data->nama_lengkap}}</td>
        <td>{{ $data->jenis_kelamin}}</td>
        <td>{{ $data->tanggal_lahir}}</td>
        <td>{{ $data->tempat_lahir}}</td>
        <td>{{ $data->agama}}</td>
        <td>{{ $data->alamat}}</td>
        <td>{{ $data->email}}</td>
        <td>{{ $data->kelas->nama_kelas }}</td>
        <td>
        <a href="{{route('murid.edit', $data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('murid.show', $data->id)}}" class="btn btn-warning">Show</a>
        <form action="{{route('murid.destroy', parameters: $data->id)}}" method="POST">
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