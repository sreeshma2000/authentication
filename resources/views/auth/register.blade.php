@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: calc(90vh - 56px);">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">{{ __('Register') }}</div>

            <div class="card-body p-4">
                <form id="registerForm" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('registerForm');

        form.addEventListener('submit', function (event) {
            // Clear previous error messages
            const invalidFeedbacks = document.querySelectorAll('.invalid-feedback');
            invalidFeedbacks.forEach(function (feedback) {
                feedback.style.display = 'none';
            });

            // Name validation
            const nameInput = document.getElementById('name');
            const nameValue = nameInput.value;

            if (nameValue.trim() === '') {
                event.preventDefault();
                nameInput.classList.add('is-invalid');
                nameInput.nextElementSibling.style.display = 'block';
                nameInput.nextElementSibling.innerHTML = '<strong>Name is required.</strong>';
            }

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

            // Confirm Password validation
            const confirmPasswordInput = document.getElementById('password-confirm');
            const confirmPasswordValue = confirmPasswordInput.value;

            if (passwordValue !== confirmPasswordValue) {
                event.preventDefault();
                confirmPasswordInput.classList.add('is-invalid');
                confirmPasswordInput.nextElementSibling.style.display = 'block';
                confirmPasswordInput.nextElementSibling.innerHTML = '<strong>Passwords do not match.</strong>';
            }
        });
    });
</script>
@endsection
