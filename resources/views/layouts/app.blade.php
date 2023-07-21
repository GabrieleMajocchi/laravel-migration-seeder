<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    
    <main>
        @yield('main-section')
    </main>
    
        @vite('resources/js/app.js')
</body>
</html>
