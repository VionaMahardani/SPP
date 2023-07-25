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

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::orderBy('nama_kelas','asc')->get();

        return view('pages.admin.kelas.index',['kelas'=>$kelas]);
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
        return view('pages.admin.kelas.create', [
            'kelas'=>$kelas,
            'spp'=>$spp
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
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        if($validasi) : 
            $store = Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);

            if($store) :
                Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
            else :
                Alert::eror('Terjadi Kesalahan', 'Data Gagal Ditambahkan');
            endif;
        endif;

        return redirect()-> route('data-kelas.index');
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
    public function edit($id_kelas)
    {
        $kelas = Kelas::find($id_kelas);

        return view('pages.admin.kelas.edit', [
            'kelas' => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelas)
    {
        $validasi = $request->validate([
            'nama_kelas' => 'required ',
            'kompetensi_keahlian' => 'required',
        ]);

        if($validasi) : 
            $update = Kelas::findOrFail($id_kelas)->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);

            if($update) :
                Alert::success('Berhasil', 'Data Berhasil Diperbarui');
            else :
                Alert::eror('Terjadi Kesalahan', 'Data Gagal Diperbarui');
            endif;
        endif;

        return redirect()-> route('data-kelas.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelas)
    {
        if(Kelas::find($id_kelas)->delete()) :
            Alert::success('Berhasil', 'Data Berhasil dihapus');
        else :
            Alert::error('Terjadi Kesalahan', 'Data Gagal dihapus');
        endif;

        return back();
    }
}
