<x-template>

    <x-course-navbar></x-course-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Listado de Usuarios</h1>

    <table class="table is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <a class="link is-normal is-responsive" href="/user/{{ $user->id }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td><a class="button is-info is-normal is-responsive" href="/user/{{ $user->id }}/edit">Editar</a></td>
                    <td>
                        <form action="/user/{{ $user->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="button is-danger is-normal is-responsive" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
    </table>
</x-template>
