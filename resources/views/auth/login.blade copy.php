<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #93c5fd 0%, #bfdbfe 50%, #dbeafe 100%);
        }

        .card-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
    </style>
</head>

<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl overflow-hidden card-shadow">
            <!-- Header -->
            <div class="bg-blue-600 py-6 px-8 text-center">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white">Welcome Back</h1>
                <p class="text-blue-100 mt-2">Sign in to your account</p>
            </div>

            <!-- Login Form -->
            <div class="px-8 py-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" name="email" id="email"
                                class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 input-focus transition duration-300"
                                placeholder="your@email.com" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" name="password" id="password"
                                class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 input-focus transition duration-300"
                                placeholder="••••••••" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none"
                                    id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 text-right">
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">Forgot
                                password?</a>
                        </div>
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Sign In
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-gray-600 text-sm">
                            Don't have an account?
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Sign up</a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Social Login -->
            <div class="border-t border-gray-200 px-8 py-6 bg-gray-50 rounded-b-2xl">
                <p class="text-center text-gray-600 text-sm mb-4">Or sign in with</p>
                <div class="flex justify-center space-x-4">
                    <button type="button"
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-700 hover:bg-gray-100 transition duration-300">
                        <i class="fab fa-google text-blue-600"></i>
                    </button>
                    <button type="button"
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-700 hover:bg-gray-100 transition duration-300">
                        <i class="fab fa-facebook-f text-blue-600"></i>
                    </button>
                    <button type="button"
                        class="w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-700 hover:bg-gray-100 transition duration-300">
                        <i class="fab fa-twitter text-blue-400"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-6 text-center">
            <p class="text-gray-700 text-sm">© 2023 Your Company. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Password toggle functionality
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
            this.querySelector('i').classList.toggle('fa-eye');
        });
    </script>
</body>

</html>
