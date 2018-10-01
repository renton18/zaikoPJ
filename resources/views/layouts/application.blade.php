<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="screen">
  <link href="{{ url('/') }}/dist/css/flat-ui.min.css" rel="stylesheet"><!-- Loading Flat UI -->
  <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/topmenu') }}">
          Top
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/zaikos/create">
                入庫
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/zaikos/update">
                出庫
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/zaikos/">
                在庫管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/history/">
                入出庫履歴
              </a>
            </li>
          </ul>

          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
          <ul class="navbar-nav">
          </ul>
          <!-- </div> -->

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->userName }} さん<span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row" id="content">
      <!-- コンテンツ -->
      @yield('content')
    </div>
  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>

</html>