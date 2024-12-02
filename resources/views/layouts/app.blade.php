<html lang="nl">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <header>
    <div class="school">
        <a href="{{ route('login') }}" class="login">Login</a>
        <h1>School Football App</h1>
        <a href="{{ route('register') }}" class="register">Register</a>
    </div>
        <img src="{{ asset('img/SFA-Logo.png') }}" class="SFA" alt="">

        <nav>
            <x-navbar/>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <x-footer/>
    </footer>
</body>
</html>
