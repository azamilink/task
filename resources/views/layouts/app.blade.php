<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }} | Parsinta</title>

        <link rel="stylesheet" href="/css/app.css">

        {{ $style }}
    </head>

    <body>
        <x-navbar></x-navbar>
        <div class="container">
            {{ $slot }}
        </div>

        <script src="/js/app.js"></script>

    </body>

</html>
