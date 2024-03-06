<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title }}</title>
</head>

<body>
    <header>
        <h1>{{ $page_title }}</h1>
        <nav>
            <a href="{{ route('home') }}">Torna alla home</a>
        </nav>
    </header>
    <main>
        <p>{{ $page_text }}</p>
    </main>
</body>

</html>
