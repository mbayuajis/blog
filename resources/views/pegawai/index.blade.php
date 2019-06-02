@extends('layout.layout_dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pegawai
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-primary" data-toggle="modal" data-target="#tambah_karyawan"><i class="fa fa-plus"> Tambah</i></a>


              <div class="modal fade" id="tambah_karyawan" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Tambah Data Pegawai</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{ route('pegawai.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">NIK</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputPassword1" placeholder="NIK">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Depan</label>
                            <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1" placeholder="Nama Depan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Belakang</label>
                            <input type="text" name="nama_belakang" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Jabatan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea class="form-control" name="alamat"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Foto">
                          </div>
                      </div>
                  <!-- /.box-body -->

                        <div class="box-footer text-right">
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabelPegawai" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Foto</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data_pegawai as $pegawai)
                  <tr>
                    <td>{{ $pegawai->id }}</td>
                    <td>{{ $pegawai->nik }}</td>
                    <td>{{ $pegawai->nama_depan }} {{ $pegawai->nama_belakang }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->jenis_kelamin }}</td>
                    <td>{!!str_limit($pegawai->alamat,100)!!}</td>
                    <td><img src="{{asset('storage/'. $pegawai->foto)}}" alt="" style="width:100px"></td>
                    <td width="130px">
                        <a class="btn btn-primary btn-xs" href="/pegawai/{{ $pegawai->id }}/edit"><i class="fa fa-pencil"></i> Edit</a>

                        <a class="btn btn-danger btn-xs" href="/pegawai/{{ $pegawai->id }}/delete"><i class="fa fa-pencil"></i> Hapus</a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Foto</th>
                  <th>Tindakan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection