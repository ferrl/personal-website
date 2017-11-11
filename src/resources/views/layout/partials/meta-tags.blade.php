@hasSection('meta:canonical')
    <link rel=”canonical” href="@yield('meta:canonical')">
@endif
@hasSection('meta:description')
    <meta name="description" content="@yield('meta:description')">
@endif
@hasSection('meta:author')
    <meta name="author" content="@yield('meta:author')">
@endif
@hasSection('og:title')
    <meta property="og:title" content="@yield('og:title')">
@endif
@hasSection('og:image')
    <meta property="og:image" content="@yield('og:image')">
@endif
@hasSection('og:description')
    <meta property="og:description" content="@yield('og:description')">
@endif
@hasSection('og:url')
    <meta property="og:url" content="@yield('og:url')">
@endif
@hasSection('twitter:card')
    <meta name="twitter:card" content="@yield('twitter:card')">
@endif
@hasSection('twitter:creator')
    <meta name="twitter:creator" content="@yield('twitter:creator')">
@endif
