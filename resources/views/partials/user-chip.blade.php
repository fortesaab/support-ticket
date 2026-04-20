<div class="user-chip">
    <div class="user-meta">
        <span class="user-name">{{ auth()->user()->name }}</span>
        <span class="user-email">{{ auth()->user()->email }}</span>
    </div>

    @if (auth()->user()->hasRole('admin'))
        <span class="role-pill role-admin">Admin</span>
    @elseif (auth()->user()->hasRole('agent'))
        <span class="role-pill role-agent">Agent</span>
    @else
        <span class="role-pill role-customer">Customer</span>
    @endif

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-ui.button type="submit" variant="primary">
            Logout
        </x-ui.button>
    </form>
</div>
