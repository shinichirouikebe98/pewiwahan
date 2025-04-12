@extends('layouts.app')

@section('content')
<section class="login">

<div class="login-container">
    <div class="wrapper-container">
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="@error('email') input-error @enderror">

            @error('email')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required
                class="@error('password') input-error @enderror">

            @error('password')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group checkbox-group">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn">Login</button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link">Forgot Your Password?</a>
            @endif
        </div>
    </form>
</div>
</div>
</section>
@endsection
