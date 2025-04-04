<!DOCTYPE html>
<html lang="pt-br" @class(['2xl:text-base text-sm leading-normal h-full scroll-smooth', $htmlClass])>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? sprintf('%s | %s', $title, config('app.name')) : config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('static/img/favicon.ico') }}">

    <!-- SEO -->
    <link rel="canonical" href="{{ $canonical }}">
    <meta property="og:title" content="{{ $title ? sprintf('%s | %s', $title, config('app.name')) : config('app.name') }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $description }}">
    @if($image)
    <meta property="og:image" content="{{ $image }}">
    @endif
    <meta name="description" content="{{ str($description)->limit(170) }}">

    <meta name="theme-color" content="#11234E" />


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5VDK375N');</script>
    <!-- End Google Tag Manager -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- /SEO -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}

    @livewireStyles

</head>
<body @class(['antialiased min-h-full flex flex-col w-full', $bodyClass])>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VDK375N"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{ $slot }}
    @livewireScriptConfig
</body>
</html>
