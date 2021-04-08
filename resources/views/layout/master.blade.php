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
    <title>{{ $title ?? 'Feed — yuxxeun' }}</title>
</head>
<body>

    <div class="container-fluid px-5">
    <!-- navbar -->
    <section id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="/me"><h2>.Feed</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="login"><h5>Login</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('logout') ? 'active' : '' }}" href="/logout"><h5>Logout</h5></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </section>

    {{-- Profile --}}
    <section id="profile" class="mb-3 border-bottom py-5">
        @yield('content')
    </section>

    <section>
        @yield('post')
    </section>
    </div>
    
    <script src="/js/bootstrap.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
    @section('script')

</body>
</html>