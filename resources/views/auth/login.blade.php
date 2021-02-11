<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.ahead')        
    </head>

    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Log<b>in</b></a>
                <small>PMB - Politeknik Balekambang</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_in" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="msg">Masuk untuk memulai sesi anda</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email..." autofocus>                                    
                            </div>
                            @error('email')
                                <span class="col-red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password..." required autocomplete="current-password">    
                            </div>
                            @error('password')
                                <span class="col-red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        
                        <div class="row">
                            <!--
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                            </div>
                            -->
                        </div>

                        <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                        <br></br>
                        <center>
                        <a href="{{ route('register') }}">Belum Punya Akun?</a>
                        </center>
                        

                        <!--
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="sign-up.html">Register Now!</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                        -->
                    </form>
                </div>
            </div>
            <center>
            <a type="button" href="{{ url('/') }}" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">arrow_back</i>
            </a>
            </center>
        </div>
        @include('template.skrip')
    </body>
</html>

