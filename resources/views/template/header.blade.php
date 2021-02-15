<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Senin - Ahad, 08.00 - 15.00 WIB
    </div>
    <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Hubungi Kami +62 856-4111-1267
    </div>
    </div>
</div>
<!-- End Top Bar -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <a href="#" class="logo mr-auto"><img src="{{asset('hm/img/logo.png')}}" alt=""></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

    <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="#visi_misi">Visi Misi</a></li>
        <li><a href="#beasiswa">Beasiswa</a></li>
        <li><a href="#panduan">Panduan</a></li>
        <li><a href="#prodi">Prodi</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#biaya">Biaya</a></li>          
        <li><a href="#testimoni">Testimoni</a></li>          
        </ul>
    </nav><!-- .nav-menu -->
    @if (Route::has('login'))            
            @auth
                <a class="appointment-btn scrollto" href="{{ url('/home') }}"><span class="d-none d-md-inline"><b>HOME</b></span></a>
                
            @else
                <a class="appointment-btn scrollto" href="{{ route('login') }}"><span class="d-none d-md-inline"><b>LOGIN</b></span></a>
                
            @endauth            
        @endif  
                  
    </div>
</header>
<!-- End Header -->