<!DOCTYPE html>
<html lang="pt-br" @class(['2xl:text-base text-sm leading-normal h-full scroll-smooth', $htmlClass])>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? sprintf('%s | %s', $title, config('app.name')) : config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('static/img/favicon.png') }}">

    <!-- SEO -->
    <link rel="canonical" href="{{ $canonical }}">
    <meta property="og:title" content="{{ $title ?? config('app.name') }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $description }}">
    @if($image)
    <meta property="og:image" content="{{ $image }}">
    @endif
    <meta name="description" content="{{ str($description)->limit(170) }}">

    <meta name="theme-color" content="#11234E" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- /SEO -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}

    @livewireStyles
</head>
<body @class(['antialiased min-h-full flex flex-col w-full', $bodyClass])>
    {{ $slot }}
    @livewireScriptConfig
</body>
</html>
