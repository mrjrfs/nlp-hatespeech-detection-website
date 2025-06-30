<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.guest.headers')
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    @include('layouts.guest.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('layouts.guest.footer')
    @include('layouts.guest.scripts')
</body>
</html>
