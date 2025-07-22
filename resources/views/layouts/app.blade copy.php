<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
    <style>
        .section-card {
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }
    </style>
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


        <main class="flex-1 p-6 pl-64">
            @yield('content')
        </main>
    </div>
</body>

</html>