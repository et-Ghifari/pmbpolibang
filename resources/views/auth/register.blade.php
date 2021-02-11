<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.ahead')    
    </head>

    <body class="signup-page">
        <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">Buat <b>Akun</b></a>
                <small>PMB - Politeknik Balekambang</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="msg">Buat akun untuk anggota baru</div>                    
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <input type="hidden" name="level" value="guest">
                            <div class="form-line">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama..." autofocus>                                
                            </div>
                            @error('name')
                                <span class="col-red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email..." required autocomplete="email">                                
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password..." required autocomplete="new-password">                                
                            </div>
                            @error('password')
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Konfirmasi..." required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required>
                            <label for="terms">Saya setuju dengan <strong>Prosedur Pendaftaran.</strong></label>
                        </div>

                            <button type="submit" class="btn btn-block btn-lg bg-pink waves-effect">
                                {{ __('Buat Akun') }}
                            </button>

                        <div class="m-t-25 m-b--5 align-center">
                            <a href="{{ url('/') }}">Kamu siap menjadi anggota kami?</a>
                        </div>
                    </form>
                </div>
            </div>
            <center>
            <a type="button" href="{{ route('login') }}" class="btn btn-default btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">arrow_back</i>
            </a>
            </center>
        </div>
        @include('template.skrip')
    </body>
</html>
