<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
id="sidenav-main">
<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
    aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="#" target="_blank">
    <img src="{{ asset('img/bsmart.png') }}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">Bsmart</span>
  </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="../pages/dashboard.html">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <i data-feather="user" class="mr-1 text-bblue"></i>
        </div>
        <span class="nav-link-text ms-1"><i data-feather="user" class="mr-1 text-bblue "></i>Absensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link  " href="../pages/tables.html">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <img src="{{ asset('img/3d-cube.png') }}" alt="" width="35px">
        </div>
        <span class="nav-link-text ms-1">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link  " href="../pages/billing.html">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <img src="{{ asset('img/analytics.png') }}" alt="" width="35px">
        </div>
        <span class="nav-link-text ms-1">Billing</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link  " href="../pages/virtual-reality.html">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <img src="{{ asset('img/consult.png') }}" alt="" width="35px">
        </div>
        <span class="nav-link-text ms-1">Virtual Reality</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../pages/rtl.html">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <img src="{{ asset('img/repair.png') }}" alt="" width="35px">
        </div>
        <span class="nav-link-text ms-1">RTL</span>
      </a>
    </li>
  </ul>
</div>
<!-- end sidebar -->


<div class="sidenav-footer mx-3 ">
  <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
    <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')">
    </div>
    <div class="card-body text-start p-3 w-100">
      <div
        class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
      </div>
      <div class="docs-info">
        <h6 class="text-white up mb-0">Need help?</h6>
        <p class="text-xs font-weight-bold">Please check our docs</p>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank"
          class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
      </div>
    </div>
  </div>
  <a class="btn bg-gradient-primary mt-4 w-100"
    href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree" type="button">Upgrade to
    pro</a>
</div>
</aside>
