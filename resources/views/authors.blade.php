<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Autores y sus libros</title>
</head>

<body>
    <h1>Autores y sus libros</h1>
    @foreach ($authors as $author)
        <h2>{{ $author->name }}</h2>
        <ul>
            @forelse ($author->books as $book)
                <li>{{ $book->title }}</li>
            @empty
                <li>No hay libros disponibles para este autor.</li>
            @endforelse
        </ul>
    @endforeach
</body>

</html>
