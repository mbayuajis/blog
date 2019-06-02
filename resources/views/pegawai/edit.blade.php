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
              <h2>Edit Pegawai</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="/pegawai/{{ $pegawai->id }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">NIK</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputPassword1" placeholder="NIK" value="{{ $pegawai->nik }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Depan</label>
                            <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1" value="{{ $pegawai->nama_depan }}" placeholder="Nama Depan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Belakang</label>
                            <input type="text" name="nama_belakang" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang" value="{{ $pegawai->nama_belakang }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Jabatan" value="{{ $pegawai->jabatan }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea class="form-control" name="alamat">{{ $pegawai->alamat }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" {{ $pegawai->jenis_kelamin=='Laki-laki' ? 'checked' : '' }}>Laki-Laki
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" {{ $pegawai->jenis_kelamin=='Perempuan' ? 'checked' : '' }}>Perempuan
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Foto" value="{{ $pegawai->foto }}">
                          </div>
                      </div>
                  <!-- /.box-body -->

                        <div class="box-footer text-right">
                          <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                      </form>
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