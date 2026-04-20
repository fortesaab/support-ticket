<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Support Ticket')</title>
    <style>
        :root {
            --text: #172033;
            --muted: #5b6577;
            --border: #dbe4f0;
            --shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top, #dbeafe 0%, #f4f7fb 40%, #eef2ff 100%);
            color: var(--text);
        }

        .page {
            max-width: 1150px;
            margin: 0 auto;
            padding: 24px 20px 40px;
        }

        .shell {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(219, 228, 240, 0.9);
            border-radius: 28px;
            box-shadow: var(--shadow);
            overflow: hidden;
            backdrop-filter: blur(8px);
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.96), rgba(239, 246, 255, 0.75));
            flex-wrap: wrap;
        }

        .brand-wrap {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .eyebrow {
            display: inline-block;
            width: fit-content;
            padding: 7px 12px;
            border-radius: 999px;
            background: #e0ecff;
            color: #2453b3;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .brand {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .nav {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .nav a {
            text-decoration: none;
            color: #334155;
            font-size: 14px;
            font-weight: 700;
            padding: 10px 14px;
            border-radius: 999px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        .nav a:hover {
            background: #eef2ff;
            color: #1d4ed8;
        }

        .user-chip {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: 18px;
            background: white;
            border: 1px solid #e2e8f0;
            flex-wrap: wrap;
        }

        .user-meta {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .user-name {
            font-size: 14px;
            font-weight: 700;
        }

        .user-email {
            font-size: 12px;
            color: var(--muted);
        }

        .role-pill {
            display: inline-flex;
            align-items: center;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .role-admin {
            background: #fef3c7;
            color: #92400e;
        }

        .role-agent {
            background: #dcfce7;
            color: #166534;
        }

        .role-customer {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .shell-body {
            padding: 30px;
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: 0 14px 35px rgba(15, 23, 42, 0.06);
            padding: 28px;
        }

        .section-title {
            margin: 0 0 10px;
            font-size: 34px;
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        .section-copy {
            margin: 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.7;
        }



        .grid {
            display: grid;
            gap: 24px;
        }

        .grid-2 {
            grid-template-columns: 1.5fr 1fr;
        }

        .stat {
            padding: 20px;
            border-radius: 20px;
            border: 1px solid var(--border);
            background: #f8fbff;
        }

        .stat-label {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .stat-value {
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 800;
        }

        .profile-panel {
            border-radius: 24px;
            padding: 28px;
            background: linear-gradient(160deg, #0f172a, #1e293b);
            color: white;
        }

        .profile-label {
            margin: 0 0 18px;
            color: #bfdbfe;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .profile-name {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
        }

        .profile-email {
            margin: 8px 0 0;
            color: #cbd5e1;
            font-size: 15px;
        }

        .note {
            margin-top: 22px;
            padding: 18px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.08);
            color: #e2e8f0;
            line-height: 1.7;
        }

        .alert {
            margin-top: 20px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid #fecaca;
            background: #fef2f2;
            color: #b91c1c;
            font-size: 14px;
            font-weight: 600;
        }

        .flash-success {
            margin-top: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid #bbf7d0;
            background: #f0fdf4;
            color: #166534;
            font-size: 14px;
            font-weight: 600;
        }

        .admin-page {
            display: grid;
            gap: 24px;
        }

        .admin-hero,
        .admin-table-card {
            background: #ffffff;
            border: 1px solid #dbe4f0;
            border-radius: 24px;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
        }

        .admin-hero {
            padding: 28px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.96), rgba(239, 246, 255, 0.85));
        }

        .admin-kicker {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 999px;
            background: #fef3c7;
            color: #92400e;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .admin-title {
            margin: 16px 0 10px;
            font-size: 38px;
            line-height: 1.05;
            font-weight: 800;
        }

        .admin-copy {
            margin: 0;
            max-width: 760px;
            color: #5b6577;
            font-size: 16px;
            line-height: 1.7;
        }

        .admin-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .admin-stat-card {
            padding: 18px;
            border-radius: 18px;
            border: 1px solid #e2e8f0;
            background: #f8fbff;
        }

        .admin-stat-label {
            margin: 0;
            font-size: 13px;
            color: #64748b;
        }

        .admin-stat-value {
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 800;
        }

        .admin-table-header {
            padding: 22px 24px;
            border-bottom: 1px solid #e2e8f0;
        }

        .admin-table-title {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
        }

        .admin-table-copy {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 14px;
        }

        .admin-table-wrap {
            overflow-x: auto;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }

        .admin-table th {
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #64748b;
            background: #f8fafc;
            padding: 16px 20px;
        }

        .admin-table td {
            padding: 18px 20px;
            border-top: 1px solid #edf2f7;
            vertical-align: middle;
        }

        .admin-table tr:hover {
            background: #fafcff;
        }

        .admin-user-name {
            font-weight: 700;
        }

        .admin-user-email {
            margin-top: 6px;
            color: #64748b;
            font-size: 14px;
        }

        .role-badge {
            display: inline-flex;
            align-items: center;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .badge-admin {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-agent {
            background: #dcfce7;
            color: #166534;
        }

        .badge-customer {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .badge-none {
            background: #e5e7eb;
            color: #4b5563;
        }

        .admin-role-form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-select {
            min-width: 140px;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            background: white;
            font-size: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 12px 18px;
            border: 0;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: opacity 0.15s ease, transform 0.15s ease;
        }

        .btn:hover {
            opacity: 0.95;
            transform: translateY(-1px);
        }

        .btn-primary {
            background: linear-gradient(135deg, #111827, #2563eb);
            color: white;
        }

        .btn-sm {
            min-height: 40px;
            padding: 10px 14px;
            font-size: 13px;
        }


        @media (max-width: 900px) {

            .grid-2,
            .admin-stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .admin-role-form {
                flex-direction: column;
                align-items: stretch;
            }

            .admin-select,
            .admin-save-btn {
                width: 100%;
            }

            .brand {
                font-size: 34px;
            }

            .shell-body,
            .card,
            .profile-panel,
            .admin-hero {
                padding: 22px;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="shell">
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
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                @endauth
            </div>

            <div class="shell-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
