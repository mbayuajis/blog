@extends('layout.layout_dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Lowongan Pekerjaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Lowongan Pekerjaan</li>
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
                      <h4 class="modal-title">Tambah Data Lowongan Pekerjaan</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="{{ route('lowker.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Pekerjaan</label>
                            <input type="text" name="nama_pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Nama Pekerjaan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                            <textarea class="deskripsi_pekerjaan" placeholder="" name="deskripsi_pekerjaan" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Syarat Pekerjaan</label>
                            <textarea class="syarat_pekerjaan" placeholder="" name="syarat_pekerjaan" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
                  <th>Nama Pekerjaan</th>
                  <th>Deskripsi Pekerjaan</th>
                  <th>Syarat Pekerjaan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($lowkers as $lowker)
                  <tr>
                    <td>{{ $lowker->id }}</td>
                    <td>{{ $lowker->nama_pekerjaan }}</td>
                    <td>{!!str_limit($lowker->deskripsi_pekerjaan,100)!!}</td>
                    <td>{!!str_limit($lowker->syarat_pekerjaan,100)!!}</td>
                    <td width="130px">
                        <a class="btn btn-primary btn-xs" href="/lowker/{{ $lowker->id }}/edit"><i class="fa fa-pencil"></i> Edit</a>

                        <a class="btn btn-danger btn-xs" href="/lowker/{{ $lowker->id }}/delete"><i class="fa fa-pencil"></i> Hapus</a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama Pekerjaan</th>
                  <th>Deskripsi Pekerjaan</th>
                  <th>Syarat Pekerjaan</th>
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