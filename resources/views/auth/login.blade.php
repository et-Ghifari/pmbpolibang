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
			<div class="text-center m-b-md custom-login">
				<h3>HARAP LOGIN KE APLIKASI</h3>
				<p>PMB | POLIBANG</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="contoh@gmail.com" autofocus>
                                
                                @error('email')
                                <br>
                                <span class="alert alert-danger alert-mg-b" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********" required autocomplete="current-password">
                                
                                @error('password')
                                <br>
                                <span class="alert alert-danger alert-mg-b" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
									<input type="checkbox" class="i-checks"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="{{ route('register') }}">Buat Akun</a>
                        </form>
                    </div>
                </div>
			</div>

            <br>

            <div class="text-center">
            <a href="{{ url('/') }}" type="button" class="btn btn-custon-rounded-three btn-default"><i class="fa fa-arrow-left edu-danger-error" aria-hidden="true"></i></a>
            </div>

			<div class="text-center login-footer">
				<p>Copyright © 2021. All rights reserved. By <a href="https://www.polibang.ac.id/">POLITEKNIK BALEKAMBANG JEPARA</a></p>
			</div>
		</div>   
    </div>

    @include('template.skrip')
    </body>
</html>

