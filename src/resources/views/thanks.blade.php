<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    @yield('css')
    <title>FashionablyLate</title>
</head>

<body>
    <div class="message">
        <div class="background-text">
            Thank you
        </div>
        <h1>お問い合わせありがとうございました</h1>
        <form action="/" method="get">
            <button type="submit">HOME</button>
        </form>
    </div>
</body>

</html>