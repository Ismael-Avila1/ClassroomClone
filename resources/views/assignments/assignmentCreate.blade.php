<x-template title="Crear Nueva Tarea">

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

    <form class="container" action="/assignment" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="title">Titulo: </label>
            <div class="control">
                <input class="input" type="text" id="title" name="title" placeholder="Ingresa el título de la tarea" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="instructions">Instrucciones: </label>
            <div class="control">
                <textarea name="instructions" id="instructions" cols="50" rows="10"> {{ old('instructions') }} </textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="points">Puntaje: </label>
            <div class="control">
                <input type="number" id="points" name="points" min="0" max="100" value="100">
            </div>
        </div>

        <div class="field">
            <label class="label" for="due">Fecha de entrega: </label>
            <div class="control">
                <input type="date" id="due" name="due">
            </div>
        </div>

        <input class="button is-primary is-normal is-responsive" type="submit" value="Registrar">
    </form>
</x-template>
