@extends('master.master')
@section('title', 'Isi Data')

@section('content')
<div class="container">
  <form action={{ route('postlogin') }} method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="email" name="email" class="form-control"> 
      {{-- @error('nama')
          <div class="small text-danger">{{ $message }}</div>
      @enderror --}}
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control">
      {{-- @error('telepon')
          <div class="small text-danger">{{ $message }}</div>
      @enderror --}}
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-lg rounded-pill">Login</button>
    </div>
  </form>
</div>
@endsection