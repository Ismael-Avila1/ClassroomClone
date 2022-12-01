<x-template title="Modificar Información de la Tarea">

    <form class="container" action="/course/{{ $assignment->id }}" method="POST">
        @csrf
        @method('patch')

        <div class="field">
            <label class="label" for="title">Titulo: </label>
            <div class="control">
                <input class="input" type="text" id="title" name="title" placeholder="Ingresa el título de la tarea" value="{{ $assignment->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="instructions">Instrucciones: </label>
            <div class="control">
                <textarea name="instructions" id="instructions" cols="50" rows="10"> {{ $assignment->instructions }} </textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="points">Puntaje: </label>
            <div class="control">
                <input type="number" id="points" name="points" min="0" max="100" value="100" value="{{ $assignment->points }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="due">Fecha de entrega: </label>
            <div class="control">
                <input type="date" id="due" name="due" value="{{ $assignment->due }}">
            </div>
        </div>


        <input class="button is-primary is-normal is-responsive" type="submit" value="Actualizar información">
    </form>

</x-template>
