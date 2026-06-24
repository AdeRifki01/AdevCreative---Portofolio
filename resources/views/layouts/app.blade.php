<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>My Portfolio - ADE RIFKI</title>
    <meta name="title" content="My Portfolio - ADE RIFKI">
    <meta name="description" content="Portofolio Ade Rifki, mahasiswa Teknik Informatika dan Web Developer yang berfokus pada pengembangan website modern, antarmuka pengguna, dan teknologi kreatif.">
    <meta name="keywords" content="Ade Rifki, Web Developer, Teknik Informatika, Portofolio, UI Designer, Laravel, Bootstrap">
    <meta name="author" content="Ade Rifki">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="My Portfolio - ADE RIFKI">
    <meta property="og:description" content="Portofolio Ade Rifki, mahasiswa Teknik Informatika dan Web Developer yang berfokus pada pengembangan website modern, antarmuka pengguna, dan teknologi kreatif.">
    <meta property="og:image" content="{{ asset('assets/images/profile/my-profile.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="My Portfolio - ADE RIFKI">
    <meta property="twitter:description" content="Portofolio Ade Rifki, mahasiswa Teknik Informatika dan Web Developer yang berfokus pada pengembangan website modern, antarmuka pengguna, dan teknologi kreatif.">
    <meta property="twitter:image" content="{{ asset('assets/images/profile/my-profile.jpg') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <!-- Animated Background -->
    <div class="ambient-background">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="blob blob-4"></div>

        <!-- Floating Geometric Accents -->
        <div class="accent accent-1"><i class="bi bi-asterisk"></i></div>
        <div class="accent accent-2"><i class="bi bi-circle"></i></div>
        <div class="accent accent-3"><i class="bi bi-x-lg"></i></div>
        <div class="accent accent-4"><i class="bi bi-square"></i></div>
        <div class="accent accent-5"><i class="bi bi-triangle"></i></div>
        <div class="accent accent-6"><i class="bi bi-plus-lg"></i></div>
    </div>
    <script>
        (function () {
            const currentTheme = localStorage.getItem("theme") || "dark";
            if (currentTheme === "light") {
                document.body.classList.add("light-mode");
            }
        })();
    </script>
    @yield('content')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Typed JS -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- External JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/components/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/sections/hero.js') }}"></script>

</body>
</html>