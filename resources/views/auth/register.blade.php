@extends('layouts.app')

@section('content')
<section class="register">
<div class="register-container">
    <div class="wrapper-container">
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <div class="input-form">
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="@error('name') input-error @enderror">
            </div>
            @error('name')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
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

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input id="password-confirm" type="password" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn">Register</button>
        </div>
    </form>
</div>
</div>
</section>
@endsection
