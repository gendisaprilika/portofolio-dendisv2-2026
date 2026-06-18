<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    @vite('resources/css/app.css')
</head>
<body 
    x-data="{ loading: true }"
    x-init="setTimeout(() => loading = false, 800)"
    class="bg-white text-gray-800 scroll-smooth"
>

    {{ $slot }}
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>