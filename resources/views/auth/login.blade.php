@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> -->
                    
<!-- Form-->
<div class="login-wrap">
	<div class="login-html">
	<!-- <a class="nav-link text-white" href="{{ route('register') }}">Register</a> -->
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><a for="tab-1" class="tab nav-link text-white" href="{{ route('register') }}">{{ __('Login') }}</a>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><a for="tab-2" class="tab nav-link text-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
		<div class="login-form">
		<form method="POST" action="{{ route('login') }}">
        @csrf
			<div class="sign-in-htm">
				<div class="group">
					<label for="email" class="label">{{ __('Email Address') }}</label>
					<input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<div class="group">
					<label for="password" class="label @error('password') is-invalid @enderror">{{ __('Password') }}</label>
					<input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<div class="group">
					<!-- <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember" class="icon"> {{ __('Remember Me') }}</label> -->
					<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember" class="icon text-light">{{ __('Remember Me') }}</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
