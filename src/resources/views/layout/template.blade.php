<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NM7B8LN');</script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#1f3b85">
    <meta name="theme-color" content="#1f3b85">
    @include('layout.partials.meta-tags')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NM7B8LN"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    @yield('content')

    <footer class="bg-light">
        <div class="container">
            <p class="text-center text-muted m-0 py-3">Lucas Ferreira - {{ date('Y') }}</p>
        </div>
    </footer>

    {{-- scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
