@extends('layouts.admin')

@section('title','Data Petugas')

@section('content')
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Petugas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/logout">Log Out</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('data-petugas.index') }}" class="btn btn-primary">Kembali</a>
              </div>
              <div class="card-body p-0">
                <form action="{{ route('data-petugas.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Id Petugas</label>
                            <input type="text" name="id_petugas" class="form-control" value="{{ old('id_petugas') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" value="{{ old('password') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Petugas</label>
                            <input type="text" name="nama_petugas" class="form-control" value="{{ old('nama_petugas') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <input type="text" name="level" class="form-control" value="{{ old('level') }}" require>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary" >Simpan</button>
                        </div>
                        
                    </div>
                </from>
              </div>
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection
