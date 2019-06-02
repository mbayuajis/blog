@extends('layout.master')
@section('content')
<script src="{{URL::asset('storage/ckeditor/ckeditor.js')}}"></script>
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{session ('sukses')}}
  </div>
  @endif
<div class="row">
  <h1 >Edit Data Pegawai</h1>
  <div class="col-lg-12">
    <script src="{{URL::asset('/ckeditor/ckeditor.js')}}"></script>
    <form action="/visi/{{$visi->id}}/update" method="POST">
      {{csrf_field()}}
      <form>
        <label for="">Alamat</label>
         <textarea  name="visi"  id="editor1" rows="10" cols="80">
             {{$pegawai->alamat}}
         </textarea>
         <script>

             CKEDITOR.replace( 'editor1' );
         </script>
     </form>
     <form>
       <label for="">Alamat</label>
        <textarea  name="visi"  id="editor1" rows="10" cols="80">
            {{$pegawai->alamat}}
        </textarea>
        <script>

            CKEDITOR.replace( 'editor1' );
        </script>
    </form>
  </div>
</div>
@endsection
