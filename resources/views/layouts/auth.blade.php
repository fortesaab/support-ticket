<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Support Ticket')</title>
    <link rel="stylesheet" href="{{ asset('css/app-ui.css') }}">
</head>

<body>
    <div class="page">
        <div class="shell">
            <div class="shell-header">
                <span class="eyebrow">Support Portal</span>
                <h1 class="auth-brand">Support Ticket</h1>
                <p class="subtitle">
                    Role-based access for admins, agents, and customers, with a cleaner and more intentional interface.
                </p>
            </div>

            <div class="shell-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
