<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <!-- Include Tailwind CSS from CDN for simplicity -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8 md:p-12 text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Our Todo App</h1>
                <p class="text-xl text-gray-600 mb-8">Stay organized and boost your productivity with our simple and effective todo list application.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/todos') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Go to Todos</a>
                        @else
                            <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-4">
                <ul class="flex justify-center space-x-6 text-sm text-gray-600">
                    <li>✅ Easy to Use</li>
                    <li>🔒 Secure</li>
                    <li>🚀 Boosts Productivity</li>
                </ul>
            </div>
        </div>
        <div class="mt-8 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Al-Amin. All rights reserved.
        </div>
    </div>
</body>
</html>