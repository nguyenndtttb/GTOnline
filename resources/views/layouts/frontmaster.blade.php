<!DOCTYPE html>
<html lang="en">
<head>
    <title>GTOnline</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('images/icons/logo1.jpg')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body class="animsition">
    <header>
        <div class="container-menu-desktop">
            <div class="topbar">
                <div class="content-topbar container h-100">
                    <div class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>Asia/Ho_Chi_Minh -</span>
                            <span>{{ $data['dt']->toDayDateTimeString() }}</span>
                        </span>
                        <a href="{{ route('canhbao') }}" class="left-topbar-item">Cảnh báo </a>
                        <a href="{{ route('luatgiaothong') }}" class="left-topbar-item">Luật giao thông</a>
                        <a href="#" class="left-topbar-item">About</a>
                        <a href="#" class="left-topbar-item">Contact</a>
                         @guest
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle left-topbar-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Login</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item left-topbar-item" href="{{ route('login') }}">Users</a>
                                    <a class="dropdown-item left-topbar-item" href="{{ route('admin.login.form') }}">Admins</a>
                                </div>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link left-topbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle left-topbar-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item left-topbar-item" href="{{ route('logout') }}"
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
                    </div>
                    <div class="right-topbar">
                        <a href="https://www.facebook.com/ndnguyen97">
                            <span class="fab fa-facebook-f"></span>
                        </a>
                        <a href="https://studio.youtube.com/channel/UCA0qVljl2xsVkv7wHnAlV2A">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap-header-mobile">     
                <div class="logo-mobile">
                    <a href="{{ route('index') }}"><img src="{{ URL::to('/') }}/images/icons/logo1.jpg" alt="IMG-LOGO"></a>
                </div>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>Asia/Ho_Chi_Minh-</span>
                            <span>{{ $data['dt']->toDayDateTimeString() }}</span>
                        </span>
                    </li>
                    <li class="left-topbar">
                        <a href="#" class="left-topbar-item">Cảnh báo</a>
                        <a href="#" class="left-topbar-item">
                            Luật giao thông
                        </a>
                        <a href="#" class="left-topbar-item">
                            About
                        </a>
                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>
                        <a href="{{ route('register') }}" class="left-topbar-item">
                            Sing up
                        </a>
                    </li>
                    <li class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>
                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>
                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>
                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>
                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </li>
                </ul>
                <ul class="main-menu-m">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
                    <li>
                        <a href="category-01.html">Thời sự-Xã hội</a>
                    </li>
                    <li>
                        <a href="category-02.html">Giao Thông</a>
                    </li>
                    <li>
                        <a href="category-01.html">Kinh tế</a>
                    </li>
                    <li>
                        <a href="category-02.html">Chất lượng sống</a>
                    </li>
                    <li>
                        <a href="category-01.html">Pháp luật</a>
                    </li>
                    <li>
                        <a href="category-02.html">Văn hóa giải trí</a>
                    </li>
                    <li>
                        <a href="category-02.html">Thể thao</a>
                    </li>
                    <li>
                        <a href="category-02.html">Công nghệ</a>
                    </li>
                    <li>
                        <a href="category-02.html">Thế giới</a>
                    </li>
                </ul>
            </div>
            <div class="wrap-logo container">      
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ URL::to('/') }}/images/icons/logo.jpg" alt="LOGO"></a>
                </div>  
            </div>  
            <div class="wrap-main-nav">
                <div class="main-nav">
                    <nav class="menu-desktop">
                        <a class="logo-stick" href="{{ route('index') }}">
                            <img src="{{ URL::to('/') }}/images/icons/logo.jpg" alt="LOGO">
                        </a>
                        <ul class="main-menu">
                            <li class="main-menu-active">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            @foreach( $data['theloai'] as $theloai )
                            <li class="mega-menu-item">
                                <a href="category-01.html">{{ $theloai->Ten }}</a>
                                <div class="sub-mega-menu">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        @foreach($theloai->LoaiTin as $loaitin)
                                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="pill" href="#{{ $loop->index }}" role="tab">{{ $loaitin->Ten }}</a>
                                        @endforeach()
                                    </div>
                                    <div class="tab-content">
                                        @foreach($theloai->LoaiTin as $loaitin)
                                        <div class="tab-pane show {{ $loop->first ? 'active' : '' }}" id="{{ $loop->index }}" role="tabpanel">
                                            <div class="row">
                                                @foreach($theloai->TinTuc->sortByDesc('created_at')->take(4) as $tintuc)
                                                <div class="col-3">
                                                    <div>
                                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="wrap-pic-w hov1 trans-03">
                                                            <img src="{{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }}" alt="IMG">
                                                        </a>
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    {{ $tintuc->TieuDe }}
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    {{ $theloai->Ten }}
                                                                </a>
                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>
                                                                <span class="f1-s-3">
                                                                    {{ $theloai->updated_at }}
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                             @endforeach()
                                            </div>
                                        </div>
                                        @endforeach()
                                    </div>
                                </div>
                            </li>
                            @endforeach()
                        </ul>
                    </nav>
                </div>
            </div>  
        </div>
    </header>
    @yield('content')
    <footer class="pt-5">
        <div class="bg11">
            <div class="container size-h-4 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                    Copyright © 2019 by Nguyen Duc Nguyen
                </span>
            </div>
        </div>
    </footer>
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>

    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>