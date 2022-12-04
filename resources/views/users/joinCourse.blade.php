<x-template>

    <x-user-navbar :$teachingCourses :$enrolledCourses ></x-user-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Unirse a una clase</h1>

    <form class="container" action="/join" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="code">Ingresa el código de invitación de la clase: </label>
            <div class="control">
                <input class="input" type="text" id="code" name="code" placeholder="Código de invitación" value="{{ old('code') }}">
            </div>
        </div>

        <input class="button is-primary is-normal is-responsive" type="submit" value="Registrar">
    </form>

</x-template>
