<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SC do Vedovelli</title>
        <link rel="stylesheet" href="/api-jwt/public/css/style.css">

    </head>
    <body>
        <div id="example">
            <my-component></my-component>
            <example-component></example-component>
        </div>
        <div class="container" id="app">
            @yield('content')

        </ul>
    </div>
    <script src="/api-jwt/public/js/app.js"></script>
    <script src="/api-jwt/public/js/main.js"></script>
</body>
</html>
