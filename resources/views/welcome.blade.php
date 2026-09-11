```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THE STREET Coffee</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900 antialiased overflow-x-hidden">

    {{-- 
        PAGE BACKGROUND
        Change the background here for this page.

        Examples:
        bg-gray-50
        bg-white
        bg-[#F5EFE6]
        bg-gradient-to-br from-gray-100 to-orange-50
    --}}
    <x-page-background
    background="bg-gray-50"
    class="min-h-screen w-full overflow-hidden"
>

        {{-- Navigation --}}
        <x-navbar />

        {{-- Hero Section --}}
        <x-hero />

        {{-- Features Section --}}
        <x-features />

        {{-- Coffee Menu / Pricing Section --}}
        <x-pricing />

        {{-- Customer Testimonials --}}
        <x-testimonials />

        {{-- Footer / Contact Section --}}
        <x-footer />

    </x-page-background>

</body>

</html>

