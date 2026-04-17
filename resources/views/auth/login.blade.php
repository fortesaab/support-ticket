@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card" style="max-width: 640px; margin: 0 auto;">
        <span class="eyebrow">Welcome</span>
        <h2 class="section-title" style="margin-top: 18px;">Sign in to your workspace</h2>
        <p class="section-copy">
            Use your Google account to enter the support portal. You will be redirected automatically based on your role.
        </p>

        @if (session('error'))
            <div class="alert">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('google.redirect') }}" class="button">
            Continue with Google
        </a>
    </div>
@endsection
