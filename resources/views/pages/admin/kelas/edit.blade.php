@extends('layouts.admin')

@section('title',' Edit Data Kelas')

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
            <h1 class="m-0">Edit Data Kelas</h1>
          </div>
        <div class="col-8">
         <div class="card-body table-responsive p-3">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('data-kelas.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('data-kelas.update', $kelas->id_kelas) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Kelas</label>
                                <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Kompetensi Keahlian</label>
                                <input type="text" name="kompetensi_keahlian" class="form-control" value="{{ $kelas->kompetensi_keahlian  }}" required>
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