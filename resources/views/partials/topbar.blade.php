<div class="topbar">
    <div class="brand-wrap">
        <h1 class="brand">Support Ticket</h1>
    </div>

    @auth
        <nav class="nav">
            @if (auth()->user()->hasRole('admin'))
                <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
            @endif

            @if (auth()->user()->hasRole('agent'))
                <a href="{{ route('agent.dashboard') }}">Agent Dashboard</a>
            @endif

            @if (auth()->user()->hasRole('customer'))
                <a href="{{ route('dashboard') }}">My Dashboard</a>
                <a href="{{ route('tickets.index') }}">My Tickets</a>
                <a href="{{ route('tickets.create') }}">Create Ticket</a>
            @endif
        </nav>

        @include('partials.user-chip')
    @endauth
</div>
