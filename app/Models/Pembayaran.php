<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $primaryKey = 'id_pembayaran';

    protected $fillable = [
        'id_petugas',
        'nisn',
        'id_kelas',
        'tanggal_bayar',
        'bulan_bayar',
        'tahun_bayar',
        'id_spp',
        'jumlah_bayar'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class,'nisn');

    }

    public function petugas(){
        return $this->belongsTo(Petugas::class,'id_petugas');
    }
}










