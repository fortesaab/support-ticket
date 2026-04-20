@extends('layouts.app')

@section('title', 'Ticket Details')

@section('content')
    <div class="grid grid-2">
        <div class="card">
            <span class="eyebrow">Ticket Details</span>
            <h2 style="margin: 18px 0 10px; font-size: 22px; line-height: 1.3; font-weight: 800; color: #172033;">
                {{ $ticket->title }}
            </h2>

            <p style="margin: 0; color: #5b6577; font-size: 16px; line-height: 1.8;">
                {{ $ticket->description }}
            </p>

            <div class="grid" style="grid-template-columns: repeat(2, minmax(0, 1fr)); margin-top: 28px;">
                <div class="stat">
                    <p class="stat-label">Category</p>
                    <p class="stat-value" style="font-size: 16px;">
                        {{ $ticket->category?->name ?? 'Uncategorized' }}
                    </p>
                </div>

                <div class="stat">
                    <p class="stat-label">Priority</p>
                    <p class="stat-value" style="font-size: 16px;">
                        {{ $ticket->priority?->name ?? 'N/A' }}
                    </p>
                </div>

                <div class="stat">
                    <p class="stat-label">Status</p>
                    <p class="stat-value" style="font-size: 16px;">
                        {{ $ticket->status?->name ?? 'N/A' }}
                    </p>
                </div>

                <div class="stat">
                    <p class="stat-label">Created</p>
                    <p class="stat-value" style="font-size: 16px;">
                        {{ $ticket->created_at?->format('Y-m-d H:i') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="profile-panel">
            <p class="profile-label">Ticket Ownership</p>

            <p class="profile-name">Customer</p>
            <p class="profile-email">{{ $ticket->customer?->name }}</p>
            <p class="profile-email">{{ $ticket->customer?->email }}</p>

            <div class="note">
                <strong>Assigned Agent:</strong><br>
                @if ($ticket->agent)
                    <div style="margin-top: 10px;">
                        {{ $ticket->agent->name }}<br>
                        {{ $ticket->agent->email }}
                    </div>
                @else
                    <x-ui.badge variant="neutral" style="margin-top: 10px;">
                        Not Assigned Yet
                    </x-ui.badge>
                @endif
            </div>
        </div>
    </div>
@endsection
