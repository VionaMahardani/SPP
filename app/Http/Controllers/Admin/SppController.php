<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Petugas;

use Alert;
use Illuminate\Support\Facades\Hash;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp = Spp::orderBy('nominal', 'asc')->get();
        return view ('pages.admin.spp.index', ['spp'=>$spp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view ('pages.admin.spp.create', [
            'kelas' => $kelas,
            'spp' => $spp,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nominal' => 'required',
            'tahun' => 'required',
        ]);

        if($validasi) :
            $store = Spp::create([
                'nominal' => $request->nominal,
                'tahun' => $request->tahun,
            ]);
            if($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-spp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_spp)
    {
        $spp = Spp::find($id_spp);
        
        return view ('pages.admin.spp.edit', [
            'spp' => $spp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_spp)
    {
        $validasi = $request->validate([
            'nominal' => 'required',
            'tahun' => 'required',
        ]);

        if($validasi) :
            $update = Spp::findOrFail($id_spp)->update([
                'nominal' => $request->nominal,
                'tahun' => $request->tahun,
            ]);
            if($update) :
                Alert::success('Berhasil', 'Data Berhasil diubah');
            else :
                Alert::error('Terjadi Kesalahan', 'Data Gagal diubah');
            endif;
        endif;

        return redirect()->route('data-spp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_spp)
    {
        if(Spp::find($id_spp)->delete()) :
            Alert::success('Berhasil', 'Data Berhasil dihapus');
        else :
            Alert::error('Terjadi Kesalahan', 'Data Gagal dihapus');
        endif;

        return back();
    }
}