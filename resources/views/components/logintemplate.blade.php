@props([
    'pageTitle' => 'Azure Power',
    'pageDescription' => 'Azure Power',
    'pageScript' => null,
])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $pageTitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="author" content="mahethekiller">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/ico" sizes="16x16">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/customadmin.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    {{ $slot }}


    <div class="container-fluid border-top">
        <section class="footer py-2">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <p>Copyright © {{ date('Y') }} Azure Power. All rights reserved.</p>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/customjs/common.js') }}"></script>
    {{-- Dynamically include page-specific script if available --}}
    @if ($pageScript)
        <script src="{{ asset('assets/customjs/' . $pageScript . '.js') }}"></script>
    @endif

</body>

</html>
