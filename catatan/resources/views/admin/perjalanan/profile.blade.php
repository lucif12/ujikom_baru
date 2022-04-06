@extends('layouts.app2')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">

            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->

                  <!-- /.post -->

                  <!-- Post -->

                  <!-- /.post -->

                  <!-- Post -->
                  <div class="post">
                   <div class="tab-pane" id="settings">
                  <form action="{{ $route }}" method="POST" class="form-horizontal" >
                    @csrf


                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nik</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" value="{{ $user->nik }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="name" value="{{ $user->name }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <select class="col-sm-10" name="jk" id="gender">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $user->alamat }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="tgl" placeholder="Tanggal Lahir" name="tgl" value="{{ $user->tgl }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nomer Telepon</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="telp" placeholder=" Nomer Telepon" name="telp" value="{{ $user->telp }}">
                        </div>
                      </div> <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                        </div>
                      </div>

                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">

                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Masukan</button>
                      </div>
                    </div>
                  </form>
                </div>
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->

                <!-- /.tab-pane -->


                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
