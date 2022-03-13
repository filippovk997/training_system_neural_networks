<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('inc.nav')
    @include('inc.header')

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
    
</body>
</html>