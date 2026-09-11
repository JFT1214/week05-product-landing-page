<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DA STREET Coffee - Premium Coffee Experience')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body class="bg-stone-50 text-gray-800">
    @component('components.navbar')
    @endcomponent

    <main>
        @yield('content')
    </main>

    @component('components.footer')
    @endcomponent

    <script>
        feather.replace();
    </script>
</body>
</html>