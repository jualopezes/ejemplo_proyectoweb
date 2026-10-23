 
<h1>Relacionar autores y libros</h1>

<form action="{{ route('authors_books.store') }}" method="POST">
    @csrf

    <label>Autor:</label>
    <select name="author_id" required>
        <option value="">Seleccionar autor</option>
        @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>

    <label>Libro:</label>
    <select name="book_id" required>
        <option value="">Seleccionar libro</option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
        @endforeach
    </select>

    <button type="submit">Relacionar</button>
</form>

<hr>

<h2>Relaciones guardadas</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Libro</th>
        <th>Opciones</th>
    </tr>

    @foreach ($relations as $relation)
    <tr>
        <td>{{ $relation->id }}</td>
        <td>{{ $relation->author->name }}</td>
        <td>{{ $relation->book->name }}</td>
        <td>
            <form action="{{ route('authors_books.destroy', $relation->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>