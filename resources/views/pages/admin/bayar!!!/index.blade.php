@extends('layouts.admin')
@section('content')

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
            <h1 class="m-0">Pembayaran</h1>
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
<div class="card-body table-responsive p-0" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
            <tr>
             <th>Id_Pembayaran</th>
             <th>Nisn</th>
             <th>Nama</th>
             <th>Kelas</th>
             <th>Spp</th>
             <th>Nominal</th>
             <th>Sudah Dibayar</th>
             <th>Kekurangan</th>
             <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $no => $pb)
            <tr>
             <td>{{ $no + 1 }}</td>
             <td>{{ $pb->nisn }}</td>
             <td>{{ $pb->nama }}</td>
             <td>{{ $pb->kelas->nama_kelas }}</td>
             <td>{{ $pb->spp->tahun }}</td>
             <td>{{ $pb->spp->nominal }}</td>
             <td>{{$pb->pembayaran->sum('jumlah_bayar')}}</td>
             <td>{{$pb->spp->nominal-$pb->pembayaran->sum('jumlah_bayar')}}</td>
             <td>
                @if($pb->spp->nominal-$pb->pembayaran->sum('jumlah_bayar')<= 0)
                <span class="badge badge-success ">Sudah Lunas</span>
                @else
                <a href="{{ url('pembayaran/index/create?nisn='.$pb->nisn) }}" class="btn btn-danger">Pilih Bayar</a>
                @endif
             </td>
             <td>
             </td>
            </tr>
            @endforeach
        </tbody>
     </table>
</div>

</div>

</div>
</div>
@endsection