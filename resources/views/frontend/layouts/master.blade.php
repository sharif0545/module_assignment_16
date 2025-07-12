<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('frontend_assets/assets/Sharif Patowary.ico') }}" type="image/x-icon">

    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="{{ asset('frontend_assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        @include('frontend.layouts.nav')

        @yield('main-content')
    </main>
    @include('frontend.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend_assets/js/scripts.js') }}js/scripts.js"></script>
</body>

</html>
