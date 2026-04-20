@extends('layouts.app')

@section('title', 'My Tickets')

@section('content')
    <div class="admin-page">
        <section class="admin-hero">
            <span class="admin-kicker">My Tickets</span>
            <h2 class="admin-title">Track your support requests</h2>
            <p class="admin-copy">
                Review the tickets you have created, monitor their status, and open any request to see full details.
            </p>
        </section>

        <section class="admin-table-card">
            <div class="admin-table-header"
                style="display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap;">
                <div>
                    <h3 class="admin-table-title">Your Tickets</h3>
                    <p class="admin-table-copy">
                        Every support request you submit will appear here.
                    </p>
                </div>

                <a href="{{ route('tickets.create') }}" class="btn btn-primary">
                    New Ticket
                </a>

            </div>

            <div class="admin-table-wrap">
                @if ($tickets->isEmpty())
                    <div style="padding: 24px; color: #64748b;">
                        You have not created any tickets yet.
                    </div>
                @else
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                @php
                                    $priorityClass = match ($ticket->priority?->name) {
                                        'Critical' => 'badge-admin',
                                        'High' => 'badge-agent',
                                        'Medium' => 'badge-customer',
                                        default => 'badge-none',
                                    };

                                    $statusClass = match ($ticket->status?->name) {
                                        'Resolved', 'Closed' => 'badge-agent',
                                        'Open' => 'badge-customer',
                                        'In Progress' => 'badge-admin',
                                        default => 'badge-none',
                                    };
                                @endphp

                                <tr>
                                    <td>
                                        <div class="admin-user-name">{{ $ticket->title }}</div>
                                        <div class="admin-user-email">
                                            {{ \Illuminate\Support\Str::limit($ticket->description, 60) }}
                                        </div>
                                    </td>
                                    <td>{{ $ticket->category?->name ?? 'Uncategorized' }}</td>
                                    <td>
                                        <span class="role-badge {{ $priorityClass }}">
                                            {{ $ticket->priority?->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="role-badge {{ $statusClass }}">
                                            {{ $ticket->status?->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>{{ $ticket->created_at?->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <a href="{{ route('tickets.show', $ticket) }}"
                                            style="font-weight: 700; color: #1d4ed8; text-decoration: none;">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </section>
    </div>
@endsection
