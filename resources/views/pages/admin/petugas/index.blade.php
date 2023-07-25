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
            <h1 class="m-0">Data Petugas</h1>
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
                <a href="{{ route('data-petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>


                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <!-- <table class="table table-hover text-nowrap"> -->
                <table class="table table-bordered" style="width:100%" id="petugasTable">
                  <thead>
                    <tr>
                      <th>Id Petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Nama Petugas</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($petugas as $pts)
                        <tr>
                            <td>{{ $pts->id_petugas}}</td>
                            <td>{{ $pts->username}}</td>
                            <td>{{ $pts->password}}</td>
                            <td>{{ $pts->nama_petugas}}</td>
                            <td>{{ $pts->level}}</td>
                            <td>
                            <a href="{{ route('data-petugas.edit', $pts->id_petugas) }}" class="btn btn-warning">Edit</a>
                            <form action= "{{ url('data-petugas', $pts->id_petugas) }}" class="d-inline" method="POST" id="delete{{ $pts->id_petugas }}">
                              @csrf
                              @method ('delete')
                              <button type="button" class="btn btn-danger" onclick="deleteData({{ $pts->id_petugas }})">Hapus</button>
                            </form>
                            </td> 
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <script>
      $(document).ready(function() {
        $('#petugasTable').DataTable();
      });

      function deleteData(id_petugas) {
          Swal.fire({
          title: 'Error!',
          text: 'Yakin ingin menghapus data Petugas?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yakin',
          cancelButtonText: 'Batal'
      }).then((result) => {
        if(result.value) {
          $('#delete'+id_petugas).submit();
        }
      })
      }
    </script>    
@endsection