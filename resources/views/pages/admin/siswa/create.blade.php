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
            <h1 class="m-0">Tambah Data Siswa</h1>
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
                <a href="{{ route('data-siswa.index') }}" class="btn btn-primary">Kembali</a>
              </div>
              <div class="card-body p-0">
                <form action="{{ route('data-siswa.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" class="form-control" value="{{ old('nisn') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Nis</label>
                            <input type="text" name="nis" class="form-control" value="{{ old('nis') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" value="{{ old('password') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="kelas" id="" class="custom-select" {{ count($kelas) == 0 ? 'disabled' : '' }}>
                              @if (count ($kelas) == 0)
                              <option value="">Pilihan tidak ada</option>
                              @else
                              <option value="">Silahkan pilih</option>
                                @foreach($kelas as $kls)
                                    <option value="{{ $kls->id_kelas }}"> {{ $kls->nama_kelas }}</option>
                                @endforeach
                              @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No telp</label>
                            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}" require>
                        </div>
                        <div class="form-group">
                            <label for="id_spp">SPP</label>
                            <select name="spp" id="" class="custom-select" {{ count($spp) == 0 ? 'disabled' : '' }}>
                              @if (count ($spp) == 0)
                              <option value="">Pilihan tidak ada</option>
                              @else
                              <option value="">Silahkan pilih</option>
                                @foreach($spp as $spp)
                                    <option value="{{ $spp->id_spp }}"> {{ 'Tahun '.$spp->tahun.' - '.'Rp. '. number_format ($spp->nominal) }}</option>
                                @endforeach
                              @endif
                            </select>
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
