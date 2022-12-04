<x-template>

    <x-course-navbar></x-course-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Registro de Usuario</h1>

    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="notification is-danger">
                    {{-- <button class="delete"></button> --}}
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>

    <form class="container" action="/user" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="name">Nombre: </label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Correo electrónico</label>
            <div class="control">
                <input class="input" type="mail" id="email" name="email" placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">Contraseña: </label>
            <div class="control">
                <input class="input" type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
            </div>
        </div>

        <div class="field">
            <label class="label" for="comfirmedPassword">Confirmar Contraseña: </label>
            <div class="control">
                <input class="input" type="password" id="comfirmedPassword" name="comfirmedPassword" placeholder="Confirma tu contraseña">
            </div>
        </div>

        <input class="button is-primary is-normal is-responsive" type="submit" value="Registrar">
    </form>
</x-template>
