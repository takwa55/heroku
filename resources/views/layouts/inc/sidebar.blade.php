
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

        @can('Les Enquetes_Traitées')
        
          <li class="nav-item"id="navbarNavDarDropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
              <img src="{{ asset('admin/img/list.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;">Les Enquetes_Traitées
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              @can('Liste des enquetes/locale')
                <li>
                  <a class="dropdown-item" style="color:black; font-size:15px;" href="{{ url('add-enquete') }}">
                    <img src="{{ asset('admin/img/checklist.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;">Liste des enquetes/locale
                  </a>
                </li>
              @endcan
              
              @can('Liste des enquetes/Wilayas')
                <li>
                  <a class="dropdown-item" style="color:black; font-size:15px;" href="{{ url('add-wilaya') }}">
                    <img src="{{ asset('admin/img/checklist.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;">Liste des enquetes/Wilayas
                  </a>
                </li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('Service_Revision')
          <li class="nav-item"id="navbarNavDarDropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
              <img src="{{ asset('admin/img/customer-service-agent.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;"> Service_Revision
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              @can('Demande Revision /338')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'Ajouter-revision' }}"><i class="icon icon-drawer"></i>Demande Revision /338</a></li>
              @endcan

              @can('Instance Revision')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'instances-revision' }}"><i class="icon icon-book-open"></i>Instance Revision</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('Service_Liquidation')
          <li class="nav-item"id="navbarNavDarDropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
              <img src="{{ asset('admin/img/consult.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;"> Service_Liquidation
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              @can('Demande 1-ier_paiement')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'ajouter-enquete' }}"><i class="icon icon-diamond"></i>Demande 1-ier_paiement</a></li>
              @endcan

              @can('Instance 1-ier_paiement')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'demande-enquete' }}"><i class="icon icon-book-open"></i>Instance 1-ier_paiement</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('Statistique')
          <li class="nav-item"id="navbarNavDarDropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
              <img src="{{ asset('admin/img/analysis.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;"> Statistique 
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

            @can('Statistique_Constantine')
              <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'enquete_report' }}"><img src="{{ asset('admin/img/bar-chart.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;">Statistique_Constantine</a></li>
            @endcan

            @can('Statistique_Wilaya')
              <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'wilaya_report' }}"><img src="{{ asset('admin/img/statistics.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;"> Statistique_Wilaya</a></li>
            @endcan
            </ul>
          </li>
        @endcan

        @can('Les Utilisateurs') 
          <li class="nav-item"id="navbarNavDarDropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255)">
              <img src="{{ asset('admin/img/service.png') }}" alt="main_logo" style="width: 21px; margin-right:8px;"></i> Les Utilisateurs
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              
              @can('List des Utilisateurs')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'users' }}"><img src="{{ asset('admin/img/quality-control.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;"></i>List des Utilisateurs</a></li>
              @endcan
             
              @can('Pouvoir de controle')
                <li><a class="dropdown-item" style="color:black; font-size:16px;" href="{{ 'roles' }}"><img src="{{ asset('admin/img/remote-control.png') }}" alt="main_logo" style="width: 21px; margin-right:1px;"></i>Pouvoir de controle</a></li>
              @endcan
              
            </ul>
          </li>
        @endcan
    </div>
