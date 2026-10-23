<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="nombre" id="" placeholder="Nombre" value="{{$book->name}}">
        <br>
        <input type="date" name="fecha" id="" placeholder="Fecha" value="{{$book->date}}">
        <br>
        <input type="number" name="precio" id="" placeholder="Precio" value="{{$book->price}}">
        <br>
        <input type="text" name="edicion" id="" placeholder="Edición" value="{{$book->edition}}">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>