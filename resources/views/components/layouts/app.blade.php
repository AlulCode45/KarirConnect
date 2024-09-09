<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Karir Connect' }}</title>
    <meta name="description" content="Solusi praktis bagi pencari kerja & perusahaan. Kelola profil, lowongan, dan perekrutan dengan mudah.">
    <meta name="keywords" content="kerja, perusahaan, lowongan, karir, connect, rekrut, perekrutan">

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
{{ $slot }}
</body>

@livewireScripts
</html>
