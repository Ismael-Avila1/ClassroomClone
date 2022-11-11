<x-template title="Modificar Información de Usuario">

    <form action="/user/{{ $user->id }}" method="POST">
        @csrf
        @method('patch')
        <label class="label" for="name">Nombre: </label>
        <input class="input" type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Ingresa tu nombre">

        <label class="label" for="email">Correo electrónico</label>
        <input class="input" type="mail" id="email" name="email" value="{{ $user->email }}" placeholder="Ingresa tu correo electrónico">

        <input class="button is-success is-normal is-responsive" type="submit" value="Actualizar información">
    </form>
</x-template>
