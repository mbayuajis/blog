<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LowonganPekerjaan;
use Alert;

class LowonganPekerjaanController extends Controller
{

    public function indexdash()
    {
        return view('lowonganpekerjaan.indexdash', ['lowkers' => LowonganPekerjaan::all(), 'active' => 'lowker']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $data_pegawai = \App\Pegawai::all();//menggambil seluruh data yang ada di tabel pegawai|app adalah namespace
      // return view('pegawai.index', ['data_pegawai' => $data_pegawai]); //asosiativ array
      $data_lowonganpekerjaan = \App\LowonganPekerjaan::all();
      return view('lowonganpekerjaan.index', ['data_lowonganpekerjaan' => $data_lowonganpekerjaan]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        LowonganPekerjaan::create([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
            'syarat_pekerjaan' => $request->syarat_pekerjaan
        ]);

        return redirect(route('lowker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data_lowonganpekerjaan = \App\LowonganPekerjaan::find($id);
      return view('lowonganpekerjaan.index', ['data_lowonganpekerjaan' => $lowongan]);
      // return view('lowonganpekerjaan.index',compact('lowongan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_lowonganpekerjaan = \App\LowonganPekerjaan::find($id);
        return view('lowonganpekerjaan.edit', ['lowker' => $data_lowonganpekerjaan, 'active' => 'lowker']);
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
        LowonganPekerjaan::where('id', $id)->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
            'syarat_pekerjaan' => $request->syarat_pekerjaan
        ]);

        return redirect(route('lowker'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id) //menghapus data lowker
    {
      $lowker = LowonganPekerjaan::find($id);
      $lowker->delete($lowker);
        Alert::success('Succes', 'Data Berhasil di Hapus');
        return redirect(route('lowker'))->with('success', 'Data Berhasil di Delete');
    }
}
