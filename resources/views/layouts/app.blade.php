<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('judul')</title>

    <!-- Scripts -->
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Orstyle.id
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('users.edit-profil') }}">
                                      My profil
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main class="py-4">
        @auth
       <div class="container">
       @if(session()->has('completed'))
       <div class="alert alert-success">
       {{session()->get('completed')}}
       </div>
        @endif

        @if(session()->has('error'))

        <div class="alert alert-danger">
             {{session()->get('error')}}
        </div>
        @endif
    
         <div class="row">
                <div class="col-md-3">
                   @if(auth()->user()->isAdmin())
                   <ul class="list-group">
                    <li class="list-group-item">
                    <a href="{{route('post.index')}}">Post</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('Tags.index')}}">Tags</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('galeri.index')}}">Galeri</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('users')}}">User</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('users')}}">Akun Iklan</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('users')}}">Daftar Iklan</a>
                    </li>
                   </ul>
                   <ul class="list-group mt-5">
                    <li class="list-group-item">
                    <a href="{{route('trashed-post')}}">Trashed Post</a>
                    </li>
                   </ul>
                   @else(auth()->user()->isIklan())
                   
                   <ul class="list-group">
                    <li class="list-group-item">
                    <a href="{{route('iklan.index')}}">Daftar Iklan</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{url('pembayaran')}}">Pembayaran</a>
                    </li>
                    <li class="list-group-item">
                    <a href="{{route('datapembayaran')}}">Status Pembayaran</a>
                    </li>
                   </ul>
                   @endif
                </div>


                 
                <div class="col-md-9">
                @yield('content')
                </div>
        </div>
       </div>
        @else

        @yield('content')

        @endauth
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> 
@yield('scripts')  

</body>
</html>
