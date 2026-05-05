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
        <nav>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
            <a href="/idea">Ideas</a>
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
