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
              <h2>Edit Lowongan Pekerjaan</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <form role="form" action="/lowker/{{ $lowker->id }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nama Pekerjaan</label>
                            <input type="text" name="nama_pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Nama Pekerjaan" value="{{ $lowker->nama_pekerjaan }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi Pekerjaan</label>
                            <textarea class="deskripsi_pekerjaan" placeholder="" name="deskripsi_pekerjaan" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $lowker->deskripsi_pekerjaan }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Syarat Pekerjaan</label>
                            <textarea class="syarat_pekerjaan" placeholder="" name="syarat_pekerjaan" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $lowker->syarat_pekerjaan }}</textarea>
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