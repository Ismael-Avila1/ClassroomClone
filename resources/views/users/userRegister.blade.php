<x-template title="Registro de Usuario">

    <form action="/user" method="POST">
        @csrf
        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">

        <label for="email">Correo electrónico</label>
        <input type="mail" id="email" name="email" placeholder="Ingresa tu correo electrónico">

        <label for="password">Contraseña: </label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">

        <label for="comfirmedPassword">Confirmar Contraseña: </label>
        <input type="password" id="comfirmedPassword" name="comfirmedPassword" placeholder="Confirma tu contraseña">

        <input type="submit" value="Registrar">
    </form>
</x-template>
