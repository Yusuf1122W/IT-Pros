<html lang="nl">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <header>
        <div class="name">

            @guest
            Welcome
            @endguest

            @auth
            Welcome {{Auth::user()->name}}
            @endauth
        </div>
        <img src="{{ asset('img/SFA-Logo.png') }}" class="SFA" alt="">
        <h1>School Football App</h1>
    <div class="school">

        @guest
        <a href="{{ route('login') }}" class="login">Login</a>
        @endguest

        @guest
        <a href="{{ route('register') }}" class="register">Register</a>
        @endguest



        @auth
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </div>
        @endauth
    </div>


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
