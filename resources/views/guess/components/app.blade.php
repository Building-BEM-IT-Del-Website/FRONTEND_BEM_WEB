<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM Institut Teknologi Del | Kabinet #SahatMarsada</title>

    <!-- CDN Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    {{-- PERBAIKAN: Menghapus "path:" --}}
    <link rel="stylesheet" href="{{ asset('guest/css/app.css') }}">
</head>
<body class="bg-white">

    {{-- PERBAIKAN: Menghapus "view:" --}}
    @include('guess.components.partials.navbar')

    <main>
        {{-- PERBAIKAN: Menghapus "section:" --}}
        @yield('content')
    </main>

    {{-- PERBAIKAN: Menghapus "view:" --}}
    @include('guess.components.partials.footer')

    <!-- Scripts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom JS -->
    {{-- PERBAIKAN: Menghapus "path:" --}}
    <script src="{{ asset('guest/js/app.js') }}"></script>
    <!-- @stack('scripts') -->
</body>
{{-- PERBAIKAN: Menghapus @yield ganda dari sini --}}
</html>
