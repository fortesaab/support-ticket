@extends('layouts.app')

@section('title', 'My Tickets')

@section('content')
    <div class="admin-page">
        <x-ui.page-header label="My Tickets" title="Track your support requests"
            description="Review the tickets you have created, monitor their status, and open any request to see full details." />

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
                                    $priorityVariant = match ($ticket->priority?->name) {
                                        'Critical' => 'admin',
                                        'High' => 'agent',
                                        'Medium' => 'customer',
                                        default => 'neutral',
                                    };

                                    $statusVariant = match ($ticket->status?->name) {
                                        'Resolved', 'Closed' => 'agent',
                                        'Open' => 'customer',
                                        'In Progress' => 'admin',
                                        default => 'neutral',
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
                                        <x-ui.badge :variant="$priorityVariant">
                                            {{ $ticket->priority?->name ?? 'N/A' }}
                                        </x-ui.badge>
                                    </td>

                                    <td>
                                        <x-ui.badge :variant="$statusVariant">
                                            {{ $ticket->status?->name ?? 'N/A' }}
                                        </x-ui.badge>
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
