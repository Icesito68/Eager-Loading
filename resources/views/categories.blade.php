<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros de la Categoría</title>
</head>

<body>
    <h1>Libros de la Categoría: {{ $category->name }}</h1>

    <ul>
        @foreach ($category->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
</body>

</html>
