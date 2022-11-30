<x-template title="Información de la tarea">

    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="/classBoard.png" alt="Generic profile picture">
                        </figure>
                    </div>

                    <div class="media-content">
                        <p class="title is-4">{{ $assignment->title }}</p>
                        <p class="subtitle is-6">Instrucciones: {{ $assignment->instructions }}</p>
                        <p class="subtitle is-6">Puntaje: {{ $assignment->points }}</p>
                        <p class="subtitle is-6">Fecha de entrega: {{ $assignment->due }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Boton para subir tarea --}}

</x-template>
