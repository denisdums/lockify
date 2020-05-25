<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg" href="assets/images/icon.svg" />
    <title>Lockify</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/modern-normalize.css">
    <link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="/assets/images/logo_noir.svg" alt="Logo de Lockify">
    </div>
<div class="main">
    @yield('content')
</div>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>



