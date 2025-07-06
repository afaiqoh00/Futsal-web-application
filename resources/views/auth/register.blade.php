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
		<input id="tab-2" type="radio" name="tab" class="sign-in" ><a for="tab-2" class="tab nav-link text-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
		<input id="tab-1" type="radio" name="tab" class="sign-up" checked><a for="tab-1" class="tab nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
		<div class="login-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
				<div class="group">
					<label for="nama" class="label">{{ __('Name') }}</label>
					<input id="nama" type="text" class="input  form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				</div>
				<div class="group">
					<label for="email" class="label">{{ __('Email Address') }}</label>
					<input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="group">
					<label for="password" class="label">{{ __('Password') }}</label>
					<input id="password" type="password" class=" form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="group">
					<label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
					<input id="password-confirm" type="password" class="input form-control"  name="password_confirmation" required autocomplete="new-password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="{{ __('Register') }}">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk text-primary">
					<a for="tab-2" href="{{ route('login') }}">Already Member?</a>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection
