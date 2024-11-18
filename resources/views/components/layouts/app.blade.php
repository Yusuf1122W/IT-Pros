<html lang="nl">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/stytle.css') }}" type="text/css">
</head>
<body>
    <header>
        <h1>School Football App</h1>
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
