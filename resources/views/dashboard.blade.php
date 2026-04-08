<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Support Ticket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 p-10">
    <div class="mx-auto max-w-xl rounded-2xl bg-white p-8 shadow-lg">
        <div class="flex items-center gap-4">
            @if (auth()->user()->avatar)
                <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="h-12 w-12 rounded-full">
            @endif

            <div>
                <h1 class="text-xl font-bold text-gray-800">
                    {{ auth()->user()->name }}
                </h1>
                <p class="text-sm text-gray-500">
                    {{ auth()->user()->email }}
                </p>
            </div>
        </div>

        <p class="mt-6 text-green-600 font-medium">
            Google OAuth is working.
        </p>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button type="submit"
                class="rounded-lg bg-red-500 px-4 py-2 text-sm font-medium text-white hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
</body>

</html>
