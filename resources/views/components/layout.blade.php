@props([
    'title' => 'Project',
    'footer' => 'Project Inc.',
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <head>
        <nav style="display: flex; justify-content: space-between; align-items: center; padding: 15px; background-color: #f0f0f0; border-bottom: 1px solid #ccc;">
            <div>
                <a href="/" style="margin-right: 20px; text-decoration: none; color: #333;">Home</a>
                <a href="/about" style="margin-right: 20px; text-decoration: none; color: #333;">About Us</a>
                <a href="/contact" style="margin-right: 20px; text-decoration: none; color: #333;">Contact Us</a>
                <a href="/ideas" style="margin-right: 20px; text-decoration: none; color: #333;">Ideas</a>
            </div>
            <div>
                @auth
                    <span style="margin-right: 20px; color: #333;">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('auth.logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: #667eea; cursor: pointer; font-weight: bold; text-decoration: underline;">Logout</button>
                    </form>
                @else
                    <a href="{{ route('auth.login.form') }}" style="margin-right: 15px; text-decoration: none; color: #667eea; font-weight: bold;">Login</a>
                    <a href="{{ route('auth.register.form') }}" style="text-decoration: none; color: #667eea; font-weight: bold;">Register</a>
                @endauth
            </div>
        </nav>
    </head>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} {{ $footer }}</p>
    </footer>
</body>

</html>
