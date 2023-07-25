@extends('layouts.admin')
@section('content')
<!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> -->

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
            <h1 class="m-0">Tambah Data</h1>
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
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <form method="POST" action="{{url('/pembayaran/index')}}">
              @csrf
              <label><b> Nisn </b></label>
              <input type="text" name="nisn" value="{{$siswa->nisn}}" class="form-control" readonly>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
              <label><b> Id Kelas </b></label>
              <input type="text" name="id_kelas" value="{{$siswa->id_kelas}}" class="form-control" readonly>
          </div>
        </div>
      </div> 
    </div> 
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
              <label><b> Nama </b></label>
              <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" readonly>
          </div>
        </div>
      </div> 
    </div> 
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <label><b> Petugas </b></label>
            <input type="text" name="id_petugas" class="form-control"  >
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <label><b> Tanggal Bayar </b></label>
            <input type="date" name="tanggal_bayar" class="form-control" >
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <label><b> Bulan Bayar </b></label>
            <input type="text" name="bulan_bayar" class="form-control" >
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <label><b> Tahun Bayar </b></label>
            <input type="text" name="tahun_bayar" class="form-control" >
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <div class="card-body">
          <div class="form-group">
            <label><b> Jumlah Bayar </b></label>
            <input type="number" name="jumlah_bayar" class="form-control">
            <br>
            </div>
        </div>
      </div>
      <input type="submit" value="simpan" name="simpan" class="btn btn-success">
    </div>  
        </form>

    </div>
  </div>

</div>

@endsection