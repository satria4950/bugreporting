  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="#" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link text-body bg-light font-weight-bold px-0" style="border:none">
                <span class="d-sm-inline d-none">Logout</span>
                <i class="fa fa-sign-out me-sm-1"></i> 
              </button>
            </form>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>