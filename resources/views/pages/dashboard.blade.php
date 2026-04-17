@extends('layouts.app')

@section('title', 'Customer Dashboard')

@section('content')
    <div class="grid grid-2">
        <div class="card">
            <span class="eyebrow">Customer Dashboard</span>
            <h2 class="section-title" style="margin-top: 18px;">
                Welcome back, {{ auth()->user()->name }}.
            </h2>
            <p class="section-copy">
                You are logged in as a customer. This area will later show your submitted tickets, updates,
                and support history.
            </p>

            <div class="grid" style="grid-template-columns: repeat(2, minmax(0, 1fr)); margin-top: 28px;">
                <div class="stat">
                    <p class="stat-label">Current Role</p>
                    <p class="stat-value">Customer</p>
                </div>

                <div class="stat">
                    <p class="stat-label">Access</p>
                    <p class="stat-value">Own Tickets</p>
                </div>
            </div>
        </div>

        <div class="profile-panel">
            <p class="profile-label">Signed In As</p>
            <p class="profile-name">{{ auth()->user()->name }}</p>
            <p class="profile-email">{{ auth()->user()->email }}</p>

            <div class="note">
                This area is where a customer can create support requests, follow ticket status,
                and review past conversations with the support team.
            </div>
        </div>
    </div>
@endsection
