@extends('layouts.app2')
@section('content')
<div class="container">
<div class="card">
  <form method="post" action="{{route('store perjalanan')}}">
        @csrf

    <div class="row">
      <div class="col-12">

          <div class="card-body">

             <center><h1>Tambah Data</h1></center>
            <div class="form-group row mb-4">

              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
              <div class="col-sm-12 col-md-7">

                <input type="date" class="form-control" id="tanggal" name="tanggal"
                value="<?php echo date("Y-m-d") ; ?>"required readonly>

              </div>
            </div>

            <div class="form-group row mb-4">
                <?php
                    $jam = date("H") +7;
                ?>
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text"  class="form-control" id="waktu" name="waktu"
                  value="<?php echo date ("$jam:i");?>"required readonly>
                </div>
              </div>


              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Yang Dikunjungi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="lokasi" name="lokasi">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Suhu Tubuh</label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" min="35" max="40" class="form-control" id="suhu" name="suhu">
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
