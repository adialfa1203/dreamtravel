@extends('layouts.users')
@section('content')
<div class="container"><br>
    <h1>Edit Data Siswa</h1>

<form action="/profile/{{ $users->id }}" method="POST">
@method('put')
@csrf
<div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ $users->nama }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Nomor KK</label>
    <input type="text" name="email" class="form-control" value="{{ $users->email }}">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value="{{ $users->password }}">
  </div>   
  <div class="mb-3">
    <label for="no" class="form-label">Nomor Telepon</label>
    <input type="text" name="no" class="form-control" value="{{ $users->no }}">
  </div>   
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal Lahir</label>
    <input type="date" name="tanggal" class="form-control" value="{{ $users->tanggal }}">
  </div>       
<input type="submit" name="submit" class="btn btn-info" value="Update">

</form>
</div>
@endsection