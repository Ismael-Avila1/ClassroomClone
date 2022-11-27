<x-template title="Modificar Información del Curso">

    <form class="container" action="/course/{{ $course->id }}" method="POST">
        @csrf
        @method('patch')

        <div class="field">
            <label class="label" for="name">Nombre: </label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" placeholder="Ingresa el nombre de la clase" value="{{ $course->name }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="section">Sección: </label>
            <div class="control">
                <input class="input" type="text" id="section" name="section" placeholder="Ingresa la sección de la clase" value="{{ $course->section }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="room">Salón: </label>
            <div class="control">
                <input class="input" type="text" id="room" name="room" placeholder="Ingresa el salón de la clase" value="{{ $course->room }}">
            </div>
        </div>


        <input class="button is-primary is-normal is-responsive" type="submit" value="Actualizar información">
    </form>

</x-template>
