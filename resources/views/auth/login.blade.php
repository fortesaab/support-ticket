<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Support Ticket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-sm rounded-2xl bg-white p-8 shadow-lg text-center">
        <h1 class="text-2xl font-bold text-gray-800">Support Ticket</h1>
        <p class="mt-2 text-sm text-gray-500">Sign in with your Google account</p>

        @if ($errors->any())
            <div class="mt-4 rounded-lg bg-red-50 p-3 text-sm text-red-600">
                {{ $errors->first() }}
            </div>
        @endif

        <a href="{{ route('google.redirect') }}"
            class="mt-6 inline-flex w-full items-center justify-center gap-3 rounded-lg border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50">
            <span>Continue with Google</span>
        </a>
    </div>
</body>

</html>
