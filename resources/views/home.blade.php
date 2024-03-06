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
            <ul>
                <li>
                    <a href="{{ route('first_page') }}">Vai alla pagina 1</a>
                </li>
                <li>
                    <a href="{{ route('second_page') }}">Vai alla pagina 2</a>
                </li>
                <li>
                    <a href="{{ route('third_page') }}">Vai alla pagina 3</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>
