<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ $app_name }}</title>
        <meta name="base-title" content="{{ $app_name }}">

        {{-- Meta --}}
        <meta name="author" content="{{ isset($app_author) ? $app_author : $app_name }}">
        <meta name="keywords" content="{{ isset($app_keyword) ? $app_keyword : $app_name }}">
        <meta name="description" content="{{ isset($app_description) ? $app_description : $app_name }}">

        {{-- Icon --}}
        @if (isset($app_favicon) && !empty($app_favicon))
            <link rel="apple-touch-icon" href="{{ $app_favicon }}" />
            <link rel="icon" href="{{ $app_favicon }}" type="image/png" />
            <link rel="icon" href="{{ $app_favicon }}" type="image/x-icon" />
        @endif

        {{-- Logo --}}
        @if (isset($app_logo) && !empty($app_logo))
            <meta property="og:logo" content="{{ $app_logo }}" />
            <meta property="og:image" content="{{ $app_logo }}" />
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />
            <meta property="og:image:alt" content="{{ $app_name }}" />
        @endif

        {{-- Misc Meta --}}
        <meta property="og:site_name" content="{{ $app_name }}">
        <meta property="og:description" content="{{ isset($app_description) ? $app_description : $app_name }}">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:url" content="{{ config('app.url') }}">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Scripts --}}
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.tsx', "resources/js/Pages/{$page['component']}.tsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <noscript>
            <link rel="stylesheet" href="{{ asset('css/noscript.css') }}">

            <div class="error-container">
                <div class="logo-container">
                    @if (isset($app_logo) && !empty($app_logo))
                        <img
                            src="{{ $app_logo }}"
                            alt="Application Logo"
                            class="app-logo"
                        />
                    @else
                        <img
                            src="{{ asset("images/noscript.png") }}"
                            alt="Application Logo"
                            class="app-logo"
                        />
                    @endif
                </div>
                <div class="code-container">
                    <h1>412 Pre Condition Failed</h1>
                    <p>
                        Maaf, kamu tidak bisa mengakses laman ini karena javascript tidak
                        aktif untuk website "<i>{{ config('app.url') }}</i>"
                    </p>
                </div>
                <div class="whats-container">
                    <h3>Apa yang terjadi?</h3>
                    <p>
                        Kode 412 menunjukkan bahwa anda tidak dapat mengakses laman ini
                        karena tidak dapat memenuhi kondisi yang diperlukan untuk mengakses
                        laman ini, yang mana kondisi tersebut adalah javascript harus aktif
                        sehingga laman ini dapat berjalan dengan baik
                    </p>
                </div>
                <div class="divider-container">
                    <hr />
                </div>
                <div class="footer-container">
                    <p>
                        <b>Performance & Security by</b>
                        <span class="it-team">IT {{ $app_name }}</span>
                    </p>
                </div>
            </div>
        </noscript>
    </body>
</html>
