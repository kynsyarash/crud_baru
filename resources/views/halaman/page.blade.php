<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zra Interiors</title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

<section class="w-full antialiased bg-white">

    {{-- NAVBAR --}}
    @include('halaman.navbar')

    {{-- SLIDESHOW --}}
    @include('halaman.slider')

    {{-- AREA KONTEN --}}
    <main class="mt-10">
        @yield('content')
    </main>

</section>

</body>
</html>
