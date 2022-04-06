@extends('layouts.app2')
@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>


                    </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        @foreach ($perjalanans as $p )

                        <?php $i++ ;?>
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $p->user->nik}}</td>
                        <td>{{ $p->user->name}}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->waktu }}</td>
                        <td>{{ $p->lokasi }}</td>
                        <td>{{ $p->suhu }}°C</td>
                        <td><form method="POST" action="{{ route('destroy-perjalanan',$p->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  show_confirm"  title='Delete'><i class="fas fa-trash"></i></button>
                                </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
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


@endsection
