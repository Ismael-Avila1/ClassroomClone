<x-template>

    <x-user-navbar :$teachingCourses :$enrolledCourses ></x-user-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Modificar Información del Usuario</h1>

    <form class="container" action="/user/{{ $user->id }}" method="POST">
        @csrf
        @method('patch')
        <div class="field">
            <label class="label" for="name">Nombre: </label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Ingresa tu nombre">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Correo electrónico</label>
            <div class="control">
                <input class="input" type="mail" id="email" name="email" value="{{ $user->email }}" placeholder="Ingresa tu correo electrónico">
            </div>
        </div>

        <input class="button is-primary is-normal is-responsive" type="submit" value="Actualizar información">
    </form>

</x-template>
