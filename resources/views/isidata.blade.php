@extends('master.master')
@section('title', 'Isi Data')

@section('content')
<div class="container">
  <form action={{ route('storeData') }} method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
      @error('nama')
          <div class="small text-danger">{{ $message }}</div>
      @enderror
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telepon</label>
      <input type="text" name="telepon" class="form-control" placeholder="Masukkan No Telepon">
      @error('telepon')
          <div class="small text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputAlamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
        @error('alamat')
          <div class="small text-danger">{{ $message }}</div>
      @enderror
      </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-lg rounded-pill">Submit</button>
    </div>
  </form>
</div>
@endsection