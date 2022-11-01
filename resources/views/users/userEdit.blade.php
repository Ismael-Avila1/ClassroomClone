<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Información de Usuario</title>
</head>
<body>
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


</body>
</html>
