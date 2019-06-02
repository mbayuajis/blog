<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Http\Request;
use App\VisiMisi;

class VisiMisiController extends Controller
{
    public function indexdash()
    {
        return view('visimisi.indexdash', ['visimisi' => VisiMisi::first(), 'active' => 'visimisi']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visi_misi = \App\VisiMisi::all();//menggambil seluruh data yang ada di tabel pegawai|app adalah namespace
      return view('visimisi.index', ['visi_misi' => $visi_misi]); //asosiativ array

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $visimisi = \App\VisiMisi::create();
      Alert::success('Succes', 'Visi & Misi Berhasil Di Input');
      return redirect('/visimisi')->with('Succes', 'Data Berhasil di Input');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        VisiMisi::where('id', $id)->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect(route('visimisi'));
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
}
