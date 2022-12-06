<x-template>

    <x-course-navbar :course="$course"></x-course-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Información del Curso</h1>

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
                        <p class="title is-4">{{ $course->name }}</p>
                        <p class="subtitle is-6">Sección: {{ $course->section }}</p>
                        <p class="subtitle is-6">Aula: {{ $course->room }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-template>
