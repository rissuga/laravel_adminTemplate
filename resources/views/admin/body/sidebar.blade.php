<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span href="{{ route('dashboard') }}" class="menu-title">Dashboard</span>
        <div class="badge badge-danger">new</div>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-document-text menu-icon"></i>
        <span class="menu-title">Kelola User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('user.view')}}">Tampilkan User</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('penjualan.view')}}">Table Penjualan</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/ui-features/typography.html')}}">Typography</a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="typcn typcn-film menu-icon"></i>
        <span class="menu-title">UTS</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          {{-- <li class="nav-item"><a class="nav-link" href="{{route('belajar.view')}}">Basic Elements</a></li> --}}
          <li class="nav-item"><a class="nav-link" href="{{route('uts.view')}}">coba</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="typcn typcn-chart-pie-outline menu-icon"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/charts/chartjs.html')}}">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="typcn typcn-th-small-outline menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/tables/basic-table.html')}}">Basic table</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="typcn typcn-compass menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/icons/mdi.html')}}">Mdi icons</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="typcn typcn-user-add-outline menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/samples/login.html')}}"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/samples/register.html')}}"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="typcn typcn-globe-outline menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/samples/error-404.html')}}"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{asset('backend/pages/samples/error-500.html')}}"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html">
        <i class="typcn typcn-mortar-board menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>