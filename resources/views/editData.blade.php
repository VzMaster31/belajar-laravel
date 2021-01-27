@extends('master.master')
@section('title', 'Isi Data')

@section('content')
<div class="container">
  <form action={{ route('updateData', $siswa->id) }} method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" name="nama" value={{ $siswa->nama }} class="form-control" placeholder="Masukkan Nama">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telepon</label>
      <input type="text" name="telepon" value={{ $siswa->telepon }} class="form-control" placeholder="Masukkan No Telepon">
    </div>
    <div class="form-group">
        <label for="exampleInputAlamat">Alamat</label>
        <input type="text" name="alamat" value={{ $siswa->alamat }} class="form-control" placeholder="Masukkan Alamat">
      </div>
        <div class="d-flex align-items-center justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </div>
  </form>
</div>
@endsection