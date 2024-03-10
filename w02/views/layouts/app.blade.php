<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add your CSS and JS links here -->
</head>
<body>
<header class="bg-zinc-400 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-white">Your App</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="text-white hover:text-gray-300">Home</a></li>
                <li><a href="{{ route('bio') }}" class="text-white hover:text-gray-300">Bio</a></li>
                <li><a href="{{ route('homework') }}" class="text-white hover:text-gray-300">Homework</a></li>
            </ul>
        </nav>
    </div>
</header>
    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
