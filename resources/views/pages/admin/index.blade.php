@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    @php
        $adminCount = $users->filter(fn($user) => $user->hasRole('admin'))->count();
        $agentCount = $users->filter(fn($user) => $user->hasRole('agent'))->count();
        $customerCount = $users->filter(fn($user) => $user->hasRole('customer'))->count();
    @endphp

    <div class="admin-page">
        <section class="admin-hero">
            <span class="admin-kicker">Administration</span>
            <h2 class="admin-title">Manage roles with confidence</h2>
            <p class="admin-copy">
                This dashboard gives admins full control over who acts as a customer, agent, or admin.
                Keep access clean here, so the rest of the system stays predictable.
            </p>

            @if (session('success'))
                <div class="flash-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="admin-stats">
                <div class="admin-stat-card">
                    <p class="admin-stat-label">Admins</p>
                    <p class="admin-stat-value">{{ $adminCount }}</p>
                </div>
                <div class="admin-stat-card">
                    <p class="admin-stat-label">Agents</p>
                    <p class="admin-stat-value">{{ $agentCount }}</p>
                </div>
                <div class="admin-stat-card">
                    <p class="admin-stat-label">Customers</p>
                    <p class="admin-stat-value">{{ $customerCount }}</p>
                </div>
            </div>
        </section>

        <section class="admin-table-card">
            <div class="admin-table-header">
                <h3 class="admin-table-title">User Role Management</h3>
                <p class="admin-table-copy">
                    Review every account and change access directly from this table.
                </p>
            </div>

            <div class="admin-table-wrap">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Current Role</th>
                            <th>Change Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @php
                                $currentRole = $user->roles->pluck('name')->first();

                                $roleVariant = match ($currentRole) {
                                    'admin' => 'admin',
                                    'agent' => 'agent',
                                    'customer' => 'customer',
                                    default => 'neutral',
                                };
                            @endphp


                            <tr>
                                <td>
                                    <div class="admin-user-name">{{ $user->name }}</div>
                                    <div class="admin-user-email">{{ $user->email }}</div>
                                </td>
                                <td>
                                    <x-ui.badge :variant="$roleVariant">
                                        {{ $currentRole ?? 'none' }}
                                    </x-ui.badge>

                                </td>
                                <td>
                                    <form method="POST" action="{{ route('admin.users.update-role', $user) }}"
                                        class="admin-role-form">
                                        @csrf
                                        @method('PATCH')

                                        <select name="role" class="admin-select">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}" @selected($user->hasRole($role))>
                                                    {{ ucfirst($role) }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <x-ui.button type="submit" variant="primary" size="sm">
                                            Save
                                        </x-ui.button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
