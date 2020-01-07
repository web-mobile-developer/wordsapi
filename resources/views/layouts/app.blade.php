<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WORDSAPI</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="container">
        <div class="navbar-header">
            <h1>WORDSAPI</h1>
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>
