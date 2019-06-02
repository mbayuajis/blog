@extends('layout.layout_dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visi dan Misi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Visi dan Misi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
             <form role="form" action="/visidanmisi/{{ $visimisi->id }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Visi</label>
                            <textarea class="visi" placeholder="" name="visi" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $visimisi->visi }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Misi</label>
                            <textarea class="misi" placeholder="" name="misi" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $visimisi->misi }}</textarea>
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