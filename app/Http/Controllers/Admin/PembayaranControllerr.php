<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::orderBy('nama','asc')->get();

        return view('pages.admin.bayar!!!.index',['siswa'=>$siswa]);
    }

    public function laporan()
    {
        $pembayaran = Pembayaran::orderBy('id_pembayaran','asc')->get();

        return view('pages.admin.pembayaran.laporan',['pembayaran'=>$pembayaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $siswa = Siswa::find($request->nisn);

        return view('pages.admin.pembayaran.createDatapembayaran', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $siswa = Siswa::find($request->nisn);
            $pembayaran = Pembayaran::create([
                'id_petugas' => Auth::user()->id,
                'nisn' => $request->nisn,
                'tanggal_bayar' => $request->tanggal_bayar,
                'bulan_bayar' => $request->bulan_bayar,
                'tahun_bayar' => $request->tahun_bayar,
                'id_spp' => $siswa->id_spp,
                'jumlah_bayar' => $request->jumlah_bayar,
            ]);        
    
            return redirect("pembayaran/index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $pembayaran = Pembayaran::where('nisn',$id)->get();
        return view('pages.admin.pembayaran.historyDatapembayaran', compact('siswa','pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pembayaran = Pembayaran::all($id_pembayaran);
        return view('pages.admin.pembayaran.createDatapembayaran', [
            'pembayaran' => $pembayaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function destroy($id)
//     {
//         //
//     }
}