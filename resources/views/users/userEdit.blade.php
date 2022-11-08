<x-template>
    <h1>Modificar Información de Usuario</h1>

    <form action="/user/{{ $user->id }}" method="POST">
        @csrf
        @method('patch')
        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Ingresa tu nombre">

        <label for="email">Correo electrónico</label>
        <input type="mail" id="email" name="email" value="{{ $user->email }}" placeholder="Ingresa tu correo electrónico">

        <input type="submit" value="Actualizar información">
    </form>
</x-template>
