<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center p-5">

    <div class="bg-white rounded-3xl shadow-lg max-w-4xl w-full overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 p-8 relative">
                <a href="{{ route('landing') }}">
                    <button class="absolute top-5 left-5 text-blue-500 text-2xl hover:text-blue-600 transition">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                </a>
                <div class="text-center mb-8">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5dbcdbc3-e5a5-42d8-8f6a-7c470d383c32.png"
                        alt="Company Logo" class="mb-3 mx-auto" style="max-width: 150px;">
                    <h2 class="text-3xl font-semibold text-gray-800">Login</h2>
                    <p class="text-gray-500">Silakan masuk dengan akun Anda</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <span class="input-group-text bg-gray-200 rounded-l-md p-2">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control flex-1 p-2 border-l-0 rounded-r-md"
                                id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <span class="input-group-text bg-gray-200 rounded-l-md p-2">
                                <i class="fas fa-key"></i>
                            </span>
                            <input type="password" name="password"
                                class="form-control flex-1 p-2 border-l-0 rounded-r-md" id="password"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="flex justify-between mb-4">
                        <div class="flex items-center">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label ml-2" for="rememberMe">Ingat saya</label>
                        </div>
                        <a href="#" class="text-blue-500">Lupa password?</a>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded-md py-2 w-full font-semibold hover:bg-blue-600">Masuk</button>
                    <div class="text-center mt-3">
                        <p class="text-gray-500">Belum punya akun? <a href="#" class="text-blue-500">Daftar</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="md:w-1/2">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b5e031fb-3f7b-4a1a-b387-9164cb478293.png"
                    alt="Ilustrasi login" class="w-full h-full object-cover rounded-r-3xl">
            </div>
        </div>
    </div>

</body>

</html>
