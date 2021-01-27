@extends('master.master')
@section('title', 'Daftar Siswa')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datasiswa as $siswa) 
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->telepon }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td><a href={{ route('editData', $siswa->id) }} class="btn btn-success btn-sm">Edit</a>
                <a href={{ route('deleteData', $siswa->id) }} class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection