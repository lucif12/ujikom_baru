@extends('layouts.app2')
   @section('content')
    <section class="content">
      <div class="container-fluid">

        <center><h2>Selamat Datang "{{ Auth::user()->name }}" Di Aplikasi Peduli diri</h2></center>
<hr>
      </div><!-- /.container-fluid -->
    </section>
    @endsection
