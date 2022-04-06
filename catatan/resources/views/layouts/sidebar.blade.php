<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <center><span class="brand-text font-weight-light">Peduli Diri</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <cernter><a href="#" class="">HALO!!, {{ Auth::user()->name }}</a></cernter>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">

          <div class="input-group-append">

          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item ">
            <a href="{{ route('home') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                hlaman utama
              </p>
            </a>


 @if (Auth::user()->isadmin == 1)
<li class="nav-item">
    <a href="{{ route('Total_user') }}" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Table pengguna
      </p>
    </a>
</li>
@endif

@if (Auth::user()->isadmin == 0)
          <li class="nav-item ">
            <a href="{{ route('isi-data') }}" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Isi Data
              </p>
            </a>
          </li>
          @endif

@if (Auth::user()->isadmin == 0)
<li class="nav-item ">
    <a href="{{ route('perjalanan') }}" class="nav-link ">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Catatan Perjalanan
      </p>
    </a>
  </li>
  @endif
  @if (Auth::user()->isadmin == 1)
          <li class="nav-item ">
            <a href="{{ route('per-user') }}" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Catatan Perjalanan
              </p>
            </a>
          </li>
@endif


          @if (Auth::user()->isadmin == 0)
          <li class="nav-item ">
            <a href="{{route('edit_user',Auth::User()->id)}}" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
               biodata
              </p>
            </a>
          </li>
          @endif


          <a button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>





          </li>
          <li class="nav-item ">

           {{-- <a button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link ">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf --}}
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
