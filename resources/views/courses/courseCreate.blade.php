<x-template>

    <x-course-navbar></x-course-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Crear Nueva Clase</h1>

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

    <form class="container" action="/course" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="name">Nombre: </label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" placeholder="Ingresa el nombre de la clase" value="{{ old('name') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="section">Sección: </label>
            <div class="control">
                <input class="input" type="text" id="section" name="section" placeholder="Ingresa la sección de la clase" value="{{ old('section') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="room">Salón: </label>
            <div class="control">
                <input class="input" type="text" id="room" name="room" placeholder="Ingresa el salón de la clase" value="{{ old('room') }}">
            </div>
        </div>

        <input class="button is-primary is-normal is-responsive" type="submit" value="Registrar">
    </form>
</x-template>
