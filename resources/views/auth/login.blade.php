@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: calc(90vh - 56px);">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">{{ __('Login') }}</div>

            <div class="card-body p-4">
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('loginForm');

        form.addEventListener('submit', function (event) {
            // Clear previous error messages
            const invalidFeedbacks = document.querySelectorAll('.invalid-feedback');
            invalidFeedbacks.forEach(function (feedback) {
                feedback.style.display = 'none';
            });

            // Email validation
            const emailInput = document.getElementById('email');
            const emailValue = emailInput.value;
            const emailPattern = /^[^\s@]+@gmail\.com$/;

            if (!emailPattern.test(emailValue)) {
                event.preventDefault();
                emailInput.classList.add('is-invalid');
                emailInput.nextElementSibling.style.display = 'block';
                emailInput.nextElementSibling.innerHTML = '<strong>Invalid email address. Must be a Gmail address.</strong>';
            }

            // Password validation
            const passwordInput = document.getElementById('password');
            const passwordValue = passwordInput.value;

            if (passwordValue.length < 6) {
                event.preventDefault();
                passwordInput.classList.add('is-invalid');
                passwordInput.nextElementSibling.style.display = 'block';
                passwordInput.nextElementSibling.innerHTML = '<strong>Password must be at least 6 characters.</strong>';
            }
        });
    });
</script>
@endsection
