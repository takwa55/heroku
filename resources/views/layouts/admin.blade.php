@include('layouts.inc.header')

<body>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    @include('layouts.inc.sidebar')
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    @include('layouts.inc.navbar')
    @include('sweetalert::alert')
    <div class="container-fluid py-4">
      @yield('content')      
    </div>
    @include('layouts.inc.footerbar')
  </main>
@include('layouts.inc.scripts')

</body>
</html>
