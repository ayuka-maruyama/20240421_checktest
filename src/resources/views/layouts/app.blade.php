<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <title>FashionablyLate</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h2 class="header__title">
                <a href="/" class="header__link">FashionablyLate</a>
            </h2>
        </div>
        @yield('header')
    </header>
    <main class="main">
        @yield('main')
    </main>
</body>
</html>