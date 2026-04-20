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
            @include('partials.topbar')

            <div class="shell-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
