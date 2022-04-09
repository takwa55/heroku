
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="{{ asset('admin/img/favicon.png') }}" alt="main_logo" style="width: 27px">
        <span class="ms-1 font-weight-bold " style="font-size: 19px; text-decoration:">Traitement-/338</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item"id="navbarNavDarDropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
            {{-- <i class="fa fa-bell cursor-pointer"> </i> --}}<img src="{{ asset('admin/img/woman.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Profile
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: black; font-weight:700">
                <img src="{{ asset('admin/img/sign-out.png') }}" alt="main_logo" style="width: 27px">
                  {{ __('Déconecter') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('home') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Général</span>
          </a>
        </li>
        <li class="nav-item"id="navbarNavDarDropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
            <img src="{{ asset('admin/img/list.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;">Les Enquetes_Traitées
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li>
              <a class="dropdown-item" style="color:black; font-size:15px;" href="{{ url('add-enquete') }}">
                <img src="{{ asset('admin/img/checklist.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;">Liste des enquetes/locale
              </a>
            </li>

            <li>
              <a class="dropdown-item" style="color:black; font-size:15px;" href="{{ url('add-wilaya') }}">
                <img src="{{ asset('admin/img/checklist.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;">Liste des enquetes/Wilayas
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item"id="navbarNavDarDropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
           <i class="fa fa-server" style="color: chartreuse"></i> Service_Revision
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'Ajouter-revision' }}"><i class="icon icon-drawer"></i>Demande Revision /338</a></li>
            <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'instances-revision' }}"><i class="icon icon-book-open"></i>Instance Revision</a></li>
          </ul>
        </li>

           <li class="nav-item"id="navbarNavDarDropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
            <i class="fa fa-server" style="color: rgb(255, 242, 0)"></i>Service_Liquidation
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'ajouter-enquete' }}"><i class="icon icon-diamond"></i>Demande 1-ier_paiement</a></li>
            <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'demande-enquete' }}"><i class="icon icon-book-open"></i>Instance 1-ier_paiement</a></li>
          </ul>
        </li>
     {{--    <li class="nav-item">
          <a class="nav-link " href="{{ url('add-enquete') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Liste des enquetes/locale</span>
          </a>
        </li>  --}}

      {{--   <li class="nav-item">
          <a class="nav-link " href="{{ 'Ajouter-revision' }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Demande Revision /338</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ 'instances-revision' }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Instance Revision</span>
          </a>
        </li> --}}
       {{--  <li class="nav-item">
          <a class="nav-link " href="{{ 'ajouter-enquete' }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Demande 1-ier_paiement</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ 'demande-enquete' }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Instance 1-ier_paiement</span>
          </a>
        </li> --}}
    </div>
