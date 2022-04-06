@extends('layouts.app2')
@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mt-2">
            <h1>Table User</h1>

          </div>
          <div class="col-sm-6 mt-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Table User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
                <div class="card-header">

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telepon</th>
                        <th>Email</th>

                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        @foreach ($users as $u )

                        <?php $i++ ;?>
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $u->nik }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->jk }}</td>
                        <td>{{ $u->alamat }}</td>
                        <td>{{ $u->tgl }}</td>
                        <td>{{ $u->telp }}</td>
                        <td>{{ $u->email }}</td>
                        <td><form method="POST" action="{{ route('destroy-user',$u->id) }}">
                            <a button type="button" class="btn btn-warning" href="">tampilkan</button></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  show_confirm"  title='Delete'><i class="fas fa-trash"></i></button>
                                </form>
                        </td>
                      </tr> @endforeach
                    </tbody>

                    <tfoot>

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
