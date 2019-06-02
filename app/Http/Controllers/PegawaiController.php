<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Http\Request;
use Auth;

class PegawaiController extends Controller
{
  public function index()
    {
      $data_pegawai = \App\Pegawai::all();//menggambil seluruh data yang ada di tabel pegawai|app adalah namespace
      
      return view('pegawai.index', ['data_pegawai' => $data_pegawai]); //asosiativ array
    }

    // private $welcome = 0;
    // public function index()
    // {
    //   $data_pegawai = \App\Pegawai::all();//menggambil seluruh data yang ada di tabel pegawai|app adalah namespace
    //   if($this->welcome == 0){
    //     Alert::success( Auth::user()->name, 'Welcome' );
    //     $this->welcome = 1;
    //   }
    //   return view('pegawai.index', ['data_pegawai' => $data_pegawai])->with('success', 'Halo'); //asosiativ array
    // }

    public function create(Request $r)//menambah data pegawai
    {
      // $path = $request->file('foto')->store('foto');
      //
      //  return $path;

        $p = new \App\Pegawai();
        $p->nik = $r->input('nik');
        $p->nama_depan =  $r->input('nama_depan');
        $p->nama_belakang = $r->input('nama_belakang');
        if($image = $r->file('foto')){
          $imageName = $image->getClientOriginalName() . $r->input('nama_depan');
          $fileNameOnly = pathinfo($imageName,PATHINFO_FILENAME);
          $image->move(public_path('storage'),$imageName);
          $p->foto = $imageName;
        }
        $p->jabatan = $r->input('jabatan');
        $p->jenis_kelamin =  $r->input('jenis_kelamin');
        $p->alamat =  $r->input('alamat');
        $p->save();

      Alert::success('Succes', 'Data Berhasil Di Input');
      return redirect('/pegawai')->with('Succes', 'Data Berhasil di Input');

    }
    public function edit($id) //mengedit data pegawai
    {
      $pegawai = \App\Pegawai::find($id);
      Alert::success('Succes', 'Data Berhasil Di Edit');
      return view('pegawai/edit', ['pegawai'=> $pegawai]);
    }

    public function update(Request $request, $id) //mengubah data pegawai
    {
      $pegawai = \App\Pegawai::find($id);
      if($request->file('foto') == NULL){
        $imageName = $pegawai->foto;
      } else {
        $image = $request->file('foto');
        $imageName = $image->getClientOriginalName() . $request->input('nama_depan');
        $fileNameOnly = pathinfo($imageName,PATHINFO_FILENAME);
        $image->move(public_path('storage'),$imageName);
      }
      $pegawai->update([
        'nik' => $request->nik,
        'nama_depan' => $request->nama_depan,
        'nama_belakang' => $request->nama_belakang,
        'jabatan' => $request->jabatan,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
        'foto' => $imageName
      ]);
      Alert::success('Succes', 'Data Berhasil di Update');
      return redirect('/pegawai')->with('success', 'Data Berhasil di Update');
    }

    public function delete($id) //menghapus data pegawai
    {
      $pegawai = \App\Pegawai::find($id);
      $pegawai->delete($pegawai);
        Alert::success('Succes', 'Data Berhasil di Hapus');
        return redirect('/pegawai')->with('success', 'Data Berhasil di Delete');
    }
}
