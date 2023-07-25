@extends('layouts.dashboard')
@section('content')
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
            @foreach ($pembayaran as $no => $pb)
            <tr>
             <td>{{ $no + 1 }}</td>
             <td>{{ $pb->siswa->nisn }}</td>
             <td>{{ $pb->siswa->nama }}</td>
             <td>{{ $pb->siswa->kelas->nama_kelas }}</td>
             <td>{{ $pb->siswa->spp->tahun }}</td>
             <td>{{ $pb->siswa->spp->nominal }}</td>
             <td>{{$pb->siswa->pembayaran->sum('jumlah_bayar')}}</td>
             <td>{{$pb->siswa->spp->nominal-$pb->pembayaran->sum('jumlah_bayar')}}</td>
             <td>
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