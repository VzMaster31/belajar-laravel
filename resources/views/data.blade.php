@extends('master.master')
@section('title', 'About')

@section('content')
<form action="/data" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telepon</label>
      <input type="text" name="telepon" class="form-control" placeholder="Masukkan No Telepon">
    </div>
    <div class="form-group">
        <label for="exampleInputAlamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection