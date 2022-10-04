<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
  
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>ESTICHARA</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{asset('css/examples.css')}}" rel="stylesheet"> 
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body>
    
    
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="../assets/images/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="../assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        
        
        
        
            
           
             
        <li class="nav-item"><a class="nav-link" href="/listUser">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Gestion des utilisateurs</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/analyse">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Analyse Prescription</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/recommandation">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Recommandation </a></li> 
        
        <li class="nav-item"><a class="nav-link" href="/admin/recherchepathologie">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Gestion Pathologies</a></li>
        <li class="nav-item"><a class="nav-link" href="/admin/recherchallergie">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Gestion Allergies</a></li>
            <li class="nav-item"><a class="nav-link" href="/pharmacien/rechercheMed">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Recherche Medicament</a></li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Historique<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="/historiqueanalyse"> Analyses</a></li>
            <li class="nav-item"><a class="nav-link" href="/historiquerec"> Recommendations</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Recherches</a></li>
            
          </ul>
        </li>
       
        

       
        
        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button>
          <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="../assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            
          </ul>
          <ul class="header-nav ms-auto">
            
          </ul>
          <ul class="header-nav ms-3">
          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
        </div>
        
      </header>
      <div class=" flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
           @yield('content')
          </div>
          <div class="container-fluid">
            

          
        </div>
      </div>
    </div>
      <footer class="footer">
        <div><a href="{{'/home'}}">ESTICHARA </a><a href="https://coreui.io"></a> © 2022 </div>
        
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('vendors/chart.js/js/chart.min.js')}}"></script>
    <script src="{{asset('vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
    </script>

  </body>
</html>