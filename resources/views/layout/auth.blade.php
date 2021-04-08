<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <title>{{ $title ?? 'Feed — Login' }}</title>
</head>
<body>

    <div class="container-fluid px-5 mt-5">
        <div class="mt-5">
            @yield('login')
        </div>
    </div>

</body>
</html>