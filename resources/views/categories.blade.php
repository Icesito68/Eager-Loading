<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias y libros</title>
</head>

<body>
    <h1>Categorias y libros</h1>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <ul>
            <li>{{ $book->title }}</li>
        </ul>
    @endforeach
</body>

</html>
