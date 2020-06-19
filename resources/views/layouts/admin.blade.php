<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="rico tritanto - Portfolio">
	<meta name="author" content="Rico Tritanto">
  <meta name="keyword" content="Rico tritanto laravel, It support, web programming, It Helpdesk">
    
  	
    @yield('title')

  <!-- UNTUK ME-LOAD ASSET DARI PUBLIC, KITA GUNAKAN HELPER ASSET() -->
	<link href="{{ asset('assets/backend/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/backend/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.module.header')
  
    <div class="app-body" id="dw">
        <div class="sidebar">
          
            @include('layouts.module.sidebar')
          
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
      
        @yield('content')
      
    </div>

    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">Masjackdotcom</a>
            <span>&copy; 2020 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/coreui.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>
<script src="{{ asset('assets/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/bootstrap-datepicker.js') }}"></script>