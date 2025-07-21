<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('layouts.partials.header')
    <div class="flex">
        @if (Auth::check() && Auth::user()->role === 'admin')
            @include('layouts.partials.sidebar-admin')
        @elseif(Auth::check() && Auth::user()->role === 'panitia')
            @include('layouts.partials.sidebar-panitia')
        @elseif(Auth::check() && Auth::user()->role === 'siswa')
            @include('layouts.partials.sidebar-siswa')
        @endif


        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>

</html>
