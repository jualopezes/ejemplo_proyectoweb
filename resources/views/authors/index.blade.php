<h1>Autores</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre del autor" required>
    <input type="date" name="birthdate" required>
    <button type="submit">Guardar</button>
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha de nacimiento</th>
        <th>Opciones</th>
    </tr>

    @foreach ($authors as $author)
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>{{ $author->birthdate }}</td>
        <td>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>