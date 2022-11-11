<x-template title="Registro de Usuario">

    <form action="/user" method="POST">
        @csrf
        <label class="label" for="name">Nombre: </label>
        <input class="input" type="text" id="name" name="name" placeholder="Ingresa tu nombre">

        <label class="label" for="email">Correo electrónico</label>
        <input class="input" type="mail" id="email" name="email" placeholder="Ingresa tu correo electrónico">

        <label class="label" for="password">Contraseña: </label>
        <input class="input" type="password" id="password" name="password" placeholder="Ingresa tu contraseña">

        <label class="label" for="comfirmedPassword">Confirmar Contraseña: </label>
        <input class="input" type="password" id="comfirmedPassword" name="comfirmedPassword" placeholder="Confirma tu contraseña">

        <input class="button is-success is-normal is-responsive" type="submit" value="Registrar">
    </form>
</x-template>
