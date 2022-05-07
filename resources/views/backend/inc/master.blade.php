
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Filaous - Portfolio Template">
        <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/font_awesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/vendor/css/multi-form.css') }}">
        <link rel="stylesheet" href="{{asset('assets/vendor/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
        <title>Epic Estates Dashboard Template</title>
    </head>
<body>
    <div class="page-wrapper" id="wrapper">
        <!-- Header Fixed Menu -->
        <header class="site-header">
            <div class="site-header-menu">
                <div class="site-header-menu-item">
                    <button class="navbar-toggler" type="button" aria-controls="left-sidebar" aria-label="Toggle navigation">
                        <span class="togler-icon-inner">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="line-3"></span>
                        </span>
                    </button>
                </div>
                <div class="site-header-menu-item">
                    <div class="profile-details-dropdown">
                        <img src="{{asset('assets/img/avatar-img.png')}}" alt="" class="img-fluid">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="profile-details-dropdown-menu" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Rajeshwar <br> Vadheraju</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profile-details-dropdown-menu">
                                <li class="mobile-full-name"><span>Rajeshwar <br>Vadheraju</span></li>
                                <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Left Sidebar Start -->
        <div class="left-sidebar">
            <div class="sidebar-menu-container">
                <nav>
                    <ul>
                        <li class="menu-item-dashboard {{ (request()->is('new-partner-registration')) ? 'active' : '' }}">
                            <a href="{{ url('investor-registration') }}">Add Investor</a>
                            <span><a href="{{ url('investor-registration') }}"><i  class="fas fa-user-plus"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>Add Investor</p></div>
                        </li>
                        <li class="menu-item-dashboard {{ (request()->is('investor-list')) ? 'active' : '' }}">
                            <a href="{{ url('investor-list') }}">View Investor List</a>
                            <span><a href="{{ url('investor-list') }}"><i class="fas fa-sort-amount-up"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>View Investor List</p></div>
                        </li>
                        <li class="menu-item-dashboard {{ (request()->is('add-new-property')) ? 'active' : '' }}">
                            <a href="{{ url( 'add-new-property' ) }}">Add Property</a>
                            <span><a href="{{ url( 'add-new-property' ) }}"><i class="fas fa-hand-holding-usd"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>Add Property</p></div>
                        </li>
                        <li class="menu-item-dashboard {{ (request()->is('property-list')) ? 'active' : '' }}">
                            <a href="{{ url( 'property-list' ) }}">View Property List</a>
                            <span><a href="{{ url( 'property-list' ) }}"><i  class="far fa-bookmark"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>View Property List</p></div>
                        </li>
                        <li class="menu-item-dashboard {{ (request()->is('add-new-entry')) ? 'active' : '' }}">
                            <a href="{{ url('add-new-entry') }}">Add Entity</a>
                            <span><a href="{{ url('add-new-entry') }}"><i class="fas fa-landmark"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>Add Entity</p></div>
                        </li>
                        <li class="menu-item-dashboard {{ (request()->is('entity-list')) ? 'active' : '' }}">
                            <a href="{{ url('entity-list') }}">View Entity List</a>
                            <span><a href="{{ url('entity-list') }}"><i class="fa fa-receipt"></i></a></span>
                            <div class="tooltip-sidebar-link"><p>View Entity List</p></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Left Sidebar End -->
        
       <!--// Main Area Start //-->
    <main class="main-area" role="main">
        @yield('main-content')
    </main>
    <!--// Main Area End //-->


      
      <!-- Footer Start -->
      
        <footer class="site-footer">
            <div class="container-fluid">
                <p> © Copyright. 2022. Epic Estates Us</p>
            </div> 
        </footer>
        <!-- Footer End -->

    </div>

    <!--// Scripts -->
    <script src="{{asset('assets/vendor/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/waypoint.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/counter.up.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js/multi-form.js')}}"></script>
    <script src="{{asset('assets/vendor/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js') }}"></script>

    </body>
</html>