<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Petugas;
use Alert;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::orderBy('username', 'asc')->get();
        return view ('pages.admin.petugas.index', ['petugas'=>$petugas]);
    }

    // public function loginPetugas()
    // {
    //     return view('pages.petugas.dashboard');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all();
        // $spp = Spp::all();
        return view('pages.admin.petugas.create', [
            'petugas'=>$petugas,
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
            'id_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);

        if($validasi) : 
            $store = Petugas::create([
            'id_petugas' => $request->id_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level,
            ]);

            if($store) :
                Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
            else :
                Alert::eror('Terjadi Kesalahan', 'Data Gagal Ditambahkan');
            endif;
        endif;

        return redirect()-> route('data-petugas.index');
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
    public function edit($id_petugas)
    {
        $petugas = Petugas::find($id_petugas);

        return view('pages.admin.petugas.edit', [
            'petugas' => $petugas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_petugas)
    {
        $validasi = $request->validate([
            'id_petugas' => 'required ',
            'username' => 'required ',
            'password' => 'required ',
            'nama_petugas' => 'required ',
            'level' => 'required',
        ]);

        if($validasi) : 
            $update = Petugas::findOrFail($id_petugas)->update([
            'id_petugas' => $request->id_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level,
            ]);

            if($update) :
                Alert::success('Berhasil', 'Data Berhasil Diperbarui');
            else :
                Alert::eror('Terjadi Kesalahan', 'Data Gagal Diperbarui');
            endif;
        endif;

        return redirect()-> route('data-petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_petugas)
    {
        if(Petugas::find($id_petugas)->delete()) :
            Alert::success('Berhasil', 'Data Berhasil dihapus');
        else :
            Alert::error('Terjadi Kesalahan', 'Data Gagal dihapus');
        endif;

        return back();
    }

    public function loginPetugas()
    {
        return view('pages.petugas.dashboard');
    }

    public function logoutPetugas(Request $request)
    {
        // Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
