<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THE STREET Coffee</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900 antialiased overflow-x-hidden">

    <x-page-background
        background="bg-gray-50"
        class="min-h-screen w-full overflow-hidden"
    >

        <x-navbar />

        <main>
            <x-hero />

            <x-features />

            <x-pricing />

            <x-testimonials />
        </main>

        <x-footer />

    </x-page-background>

</body>

</html>
