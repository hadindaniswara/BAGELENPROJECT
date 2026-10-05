<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bagelen Project')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigasi Utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/home">Bagelen Project</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/home">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/company/program">Program</a>
                <a class="nav-link" href="/company/our-team">Our Team</a>
                <a class="nav-link" href="/contact-us">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Konten Dinamis -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
