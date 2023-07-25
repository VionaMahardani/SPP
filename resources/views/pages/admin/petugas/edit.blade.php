@extends('layouts.admin')

@section('title','Edit Data Petugas')

@section('content')
    <!-- Main content -->
      <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Petugas</h1>
          </div>
        <div class="col-8">
         <div class="card-body table-responsive p-3">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('data-petugas.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('data-petugas.update', $petugas->id_petugas) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Id petugas</label>
                                <input type="text" name="id_petugas" class="form-control" value="{{ $petugas->id_petugas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $petugas->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" value="{{ $petugas->password }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" value="{{ $petugas->nama_petugas }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Level</label>
                                <input type="text" name="level" class="form-control" value="{{ $petugas->level }}" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
      </div>
@endsection