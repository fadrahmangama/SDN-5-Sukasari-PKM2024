<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN 5 SUKASARI | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/navbarStyle.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/homeStyle.css'); }}">
        <link rel="stylesheet" href="{{ asset('css/aboutUsStyle.css'); }}">
        <script src="https://kit.fontawesome.com/8beaccb2ed.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('partials/navbar')
    <section>
        @yield('section')
    </section>
    @if (!isset($showFooter) || $showFooter)
         @include('partials/footer')
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>