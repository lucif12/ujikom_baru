@extends('layouts.app2')
@section('content')
<div class="container">
<div class="card">
  <form method="post" action="{{route('store user')}}">
        @csrf

    <div class="row">
      <div class="col-12">

          <div class="card-body">

             <center><h1>Tambah Data</h1></center>
            <div class="form-group row mb-4">

              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nik</label>
              <div class="col-sm-12 col-md-7">

                <input type="text" class="form-control" id="nik" name="nik" >
              </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>


              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">jk</label>
                <select class="col-sm-10" name="jk" id="gender">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">alamat</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tgl</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="tgl" name="rgl">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">telp</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="telp" name="telp">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">eamil</label>
                <div class="col-sm-12 col-md-7">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                <div class="col-sm-12 col-md-7">
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              </div>



            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Simpan</button>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
@endsection
