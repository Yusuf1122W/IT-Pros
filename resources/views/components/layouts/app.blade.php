<html lang="nl">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <header>

        <h1>School Football App</h1>
        <img src="url{{ asset('img/SFA Logo.png') }}" alt="">
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
