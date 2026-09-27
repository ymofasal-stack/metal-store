<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Metal Store')
    </title>

    {{-- Bootstrap --}}
    <link
        rel="stylesheet"
        href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"
    >

    {{-- Custom CSS --}}
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/app.css') }}"
    >

</head>

<body>

{{-- Header --}}
@include('partials.header')

{{-- Page Content --}}
<main>
    @yield('content')
</main>
{{-- Footer --}}
@include('partials.footer')
{{-- Bootstrap JS --}}
<script
    src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"
></script>

{{-- Custom JS --}}
<script
    src="{{ asset('assets/js/app.js') }}"
></script>

</body>

</html>
