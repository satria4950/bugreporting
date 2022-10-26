<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
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
  </nav>