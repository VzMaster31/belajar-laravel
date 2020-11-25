@extends('master.master')
@section('title', 'Daftar Siswa')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datasiswa as $siswa) 
        <tr>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->telepon }}</td>
            <td>{{ $siswa->alamat }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection