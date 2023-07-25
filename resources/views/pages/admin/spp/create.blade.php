@extends('layouts.admin')

@section('title','Data Siswa')

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
            <h1 class="m-0">Tambah Data Spp</h1>
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
                <a href="{{ route('data-spp.index') }}" class="btn btn-primary">Kembali</a>
              </div>
              <div class="card-body p-0">
                <form action="{{ route('data-spp.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="{{ old('tahun') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="text" name="nominal" class="form-control" value="{{ old('nominal') }}" require>
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
