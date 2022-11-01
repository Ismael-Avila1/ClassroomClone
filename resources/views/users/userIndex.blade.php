<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>

    {{-- @vite(['resources/css/materialize.css', 'resources/js/materialize.js']) --}}
</head>
<body>
    <h1>Listado de Usuario</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <a href="/user/{{ $user->id }}">
                        {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->email }}</td>
                <td><a href="/user/{{ $user->id }}/edit">Editar</a></td>
                <td>
                    <form action="/user/{{ $user->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
