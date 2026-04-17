@extends('layouts.app')

@section('title', 'Agent Dashboard')

@section('content')
    <div class="grid grid-2">
        <div class="card">
            <span class="eyebrow">Agent Dashboard</span>
            <h2 class="section-title" style="margin-top: 18px;">
                Ready to manage support requests, {{ auth()->user()->name }}.
            </h2>
            <p class="section-copy">
                You are logged in as an agent. This area will later show assigned tickets, open issues,
                and response workflows for the support team.
            </p>

            <div class="grid" style="grid-template-columns: repeat(2, minmax(0, 1fr)); margin-top: 28px;">
                <div class="stat">
                    <p class="stat-label">Current Role</p>
                    <p class="stat-value">Agent</p>
                </div>

                <div class="stat">
                    <p class="stat-label">Access</p>
                    <p class="stat-value">Manage Tickets</p>
                </div>
            </div>

            <div class="card" style="margin-top: 24px; padding: 20px; background: #f8fbff;">
                <p class="stat-label">What agents will do here</p>
                <p class="section-copy" style="margin-top: 10px;">
                    Agents will be able to review incoming tickets, reply to customers, update statuses,
                    and move issues toward resolution.
                </p>
            </div>
        </div>

        <div class="profile-panel">
            <p class="profile-label">Signed In As</p>
            <p class="profile-name">{{ auth()->user()->name }}</p>
            <p class="profile-email">{{ auth()->user()->email }}</p>

            <div class="note">
                This panel can later show ticket workload, latest assigned conversations,
                and response performance for the current agent.
            </div>
        </div>
    </div>
@endsection
