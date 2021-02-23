<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('template.ahead')
</head>

<body>    
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ url('/') }}"><img class="main-logo" src="{{asset ('ds/img/logo/logo.png') }}" alt="" /></a>
                <strong><a href="{{ url('/') }}"><img src="{{asset ('ds/img/logo/logosn.png') }}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu">                        
                        <li>
                            <a title="Landing Page" href="{{ url('home') }}" aria-expanded="false">
                                <span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Informasi Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('akun') }}" aria-expanded="false">
                                <span class="educate-icon educate-landing icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Akun PMB Polibang</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('pand') }}" aria-expanded="false">
                                <span class="educate-icon educate-info icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Panduan Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('rform') }}" aria-expanded="false">
                                <span class="educate-icon educate-library icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Rekap Pendaftar</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('form') }}" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Formulir Pendaftaran</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('up') }}" aria-expanded="false">
                                <span class="educate-icon educate-project icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Upload Berkas</span>
                            </a>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{ url('peng') }}" aria-expanded="false">
                                <span class="educate-icon educate-bell icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Pengumuman</span>
                            </a>
                        </li>                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('/') }}"><img class="main-logo" src="{{asset ('ds/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="{{asset ('ds/img/product/login.png') }}" alt="" />
															<span class="admin-name">{{ Auth::user()->name }}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                                Log Out
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                                @csrf
                                                            </form>                                                            
                                                        </li>
                                                    </ul>
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">                                        
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li> 
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>
                                        <li><a href="{{ url('form') }}">Formulir</a></li>                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->  

        </div>
        <div class="breadcome-area">
            <div class="container-fluid">
            
            <br></br>                
                @yield('content')
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('template.skrip')
</body>

</html>
