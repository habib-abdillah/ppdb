<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Pendidikan Berbasis Pesantren</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-gray-50 @yield('bodyClass')">
    <div class="content">
        @yield('content')
    </div>
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-700 text-white p-3 rounded-full shadow-lg hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
