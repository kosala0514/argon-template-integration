<aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0"
        href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank">
        <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Ecom</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="collapse  show " id="dashboardsExamples">
            <ul class="nav ms-4">
              <li class="nav-item active ">
                <a class="nav-link active " href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-chart-line-up"></i>
                  <span class="sidenav-normal"> Dashboard </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('product') }}">
                <i class="fa-solid fa-layer-group"></i>
                  <span class="sidenav-normal"> Products </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </aside>
