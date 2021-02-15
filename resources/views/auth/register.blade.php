<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.ahead')    
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="error-pagewrap">
            <div class="error-page-int">
                <div class="text-center custom-login">
                    <h3>BUAT AKUN</h3>
                    <p>PMB | Politeknik Balekambang</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form id="loginForm" method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="row">
                                <input type="hidden" name="level" value="guest">
                                    <div class="form-group col-lg-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="nama..." autofocus>
                                        @error('name')
                                        <br>
                                            <span class="alert alert-danger alert-mg-b" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group col-lg-12">
                                        <label>Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email...">
                                        @error('email')
                                        <br>
                                            <span class="alert alert-danger alert-mg-b" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password..." required autocomplete="new-password">
                                        @error('password')
                                        <br>
                                            <span class="alert alert-danger alert-mg-b" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group col-lg-12">
                                        <label>Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password konfirmasi..." required autocomplete="new-password">
                                        <br>
                                        <input type="checkbox" class="i-checks" checked> Buat Akun untuk menjadi anggota kami
                                    </div>                                   
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success loginbtn">
                                        {{ __('Buat Akun') }}
                                    </button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <br>

                <div class="text-center">
                <a href="{{ route('login') }}" type="button" class="btn btn-custon-rounded-three btn-default"><i class="fa fa-arrow-left edu-danger-error" aria-hidden="true"></i></a>
                </div>
            </div>   
        </div>
        <div class="text-center login-footer">
            &copy; Copyright <strong><span>POLITEKNIK BALEKAMBANG JEPARA</span></strong>. All Rights Reserved <a href="{{ url('/') }}">PMB | POLIBANG</a>
        </div>
        @include('template.skrip')
    </body>
</html>
