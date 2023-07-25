@extends('layouts.admin')

@section('title',' Edit Data Siswa')

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
            <h1 class="m-0">Edit Data Siswa</h1>
          </div>
        <div class="col-8">
         <div class="card-body table-responsive p-3">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('data-siswa.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body p-0">
                    <form action="{{ route('data-siswa.update', $siswa->nisn) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">NIS</label>
                                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis  }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" id="" class="custom-select" {{ count($kelas) == 0 ? 'disabled' : '' }}>
                                    @if(count($kelas) == 0)
                                    <option value="">Pilihan tidak ada</option>
                                    @else
                                    <option value="">Silahkan Pilih</option>
                                        @foreach ($kelas as $kls)
                                            <option value="{{ $kls->id_kelas }}"{{ $siswa->id_kelas == $kls->id_kelas ? 'selected' : '' }}>{{ $kls->nama_kelas }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input type="text" name="no_telp" class="form-control" value="{{ $siswa->no_telp }}" required>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">SPP</label>
                                <select name="spp" id="" class="custom-select" {{ count($spp) == 0 ? 'disabled' : '' }}>
                                @if(count($spp) == 0)
                                <option value="">Pilihan tidak ada</option>
                                @else
                                <option value="">Silahkan Pilih</option>
                                    @foreach ($spp as $spp)
                                        <option value="{{ $spp->id_spp }}"{{ $siswa->id_Kspp == $kls->id_spp ? 'selected' : '' }}>{{ 'Tahun '.$spp->tahun.' - '.'Rp.' .number_format($spp->nominal)}}</option>
                                    @endforeach
                                @endif
                            </select>
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