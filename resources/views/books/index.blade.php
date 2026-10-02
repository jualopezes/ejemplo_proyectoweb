<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <form action="{{route('books.store')}}" method="post">
        @csrf
               
        <input type="text" name="nombre" id="">
        <input type="date" name="fecha" id="">
        <input type="number" name="precio" id="">
        <input type="text" name="edicion" id="">

        <button type="submit">Guardar</button>

    </form>
</div>


    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Edicion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->date }}</td>
                <td>{{ $book->edition }}</td>
                <td>{{ $book->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>