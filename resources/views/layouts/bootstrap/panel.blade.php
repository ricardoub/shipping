<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-class.css') }}">

    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
      ]) !!};
    </script>
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
            </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            @include('partials.menus.left')

            <!-- Right Side Of Navbar -->
            @include('partials.menus.right')
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="container">

          <div class="panel panel-primary">

            <div class="panel-heading panel-master">
              <div class="btn-toolbar" role="toolbar" aria-label="...">
                @if (!Auth::guest())
                  <div class="btn-group" role="group" aria-label="...">
                    @yield('panel-head-left')
                  </div>
                  <div class="btn-group" role="group" aria-label="...">
                    @yield('panel-head-middle')
                  </div>
                  <div class="btn-group pull-right" role="group" aria-label="...">
                    @yield('panel-head-right')
                  </div>
                @endif
              </div>
            </div>

            <div class="panel-body">
              @yield('panel-body')
            </div>

            @yield('panel-footer')

          </div><!-- .panel-primary -->

        </div><!-- .container -->
      </div><!-- .row -->

      <div class="row">
        @yield('page-footer')
      </div><!-- .row -->

    </div><!-- #app -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('page-scripts')
  </body>
</html>
