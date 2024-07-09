@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    @if(Auth::check())
                        <div class="mt-4">
                            <h5>{{ __('User Details') }}</h5>
                            <p><strong>{{ __('Name') }}:</strong> {{ Auth::user()->name }}</p>
                            <p><strong>{{ __('Email') }}:</strong> {{ Auth::user()->email }}</p>
                            <p><strong>{{ __('UUID') }}:</strong> {{ Auth::user()->uuid }}</p>
                            
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
