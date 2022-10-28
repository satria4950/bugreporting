{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        @can('!admin')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bugreportuser*') ? 'active' : '' }}" href="/dashboard/bugreportuser">
            <span data-feather="flag" class="align-text-bottom"></span>
            Laporan Bug
          </a>
        </li>
        @endcan
      </ul>
      @can('admin')
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bugreportadmin*') ? 'active' : '' }}" href="/dashboard/bugreportadmin">
            <span data-feather="flag" class="align-text-bottom"></span>
            Laporan Bug
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bugreportcategorybug*') ? 'active' : '' }}" href="/dashboard/bugreportcategorybug">
            <span data-feather="flag" class="align-text-bottom"></span>
            Bug
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bugreportcategoryrequest*') ? 'active' : '' }}" href="/dashboard/bugreportcategoryrequest">
            <span data-feather="flag" class="align-text-bottom"></span>
            Feature Request
          </a>
        </li>
      </ul>

      

      @endcan
    </div>
  </nav> --}}

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <span class="ms-1 font-weight-bold text-white">Bug Reporting</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        @can('!admin')
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/bugreportuser*') ? 'active' : '' }}" href="/dashboard/bugreportuser">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">bug_report</i>
            </div>
            <span class="nav-link-text ms-1">Laporan Bug</span>
          </a>
        </li>
        @endcan
        @can('admin')
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/bugreportadmin*') ? 'active' : '' }}" href="/dashboard/bugreportadmin">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">bug_report</i>
            </div>
            <span class="nav-link-text ms-1">Laporan Bug</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/bugreportcategorybug*') ? 'active' : '' }}" href="/dashboard/bugreportcategorybug">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">bug_report</i>
            </div>
            <span class="nav-link-text ms-1">Bug</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/bugreportcategoryrequest*') ? 'active' : '' }}" href="/dashboard/bugreportcategoryrequest">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">flag</i>
            </div>
            <span class="nav-link-text ms-1">Feature Request</span>
          </a>
        </li>
        @endcan
        
      </ul>
    </div>
  </aside>