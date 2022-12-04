<x-template>

    <x-user-navbar></x-user-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Listado de tus Cursos</h1>

    <div class="box">
        <h2>Cursos que estás dictando</h2>
        <div class="columns">
            {{-- Hacer un foreach de cada curso que el usuario sea profesor --}}
            @foreach($teachingCourses as $teaching)
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-128x128">
                            <img src="/classBoard.png" alt="Logo del curso">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="media-content">
                            <p class="subtitle is-4">{{ $teaching->name }}</p>
                            <p class="subtitle is-6">Sección: {{ $teaching->section }}</p>
                            <p class="subtitle is-6">Salón: {{ $teaching->room }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="box">
        <h2>Cursos en los que estás inscrito</h2>
        <div class="columns">
            {{-- Hacer un foreach de cada curso que el usuario sea alumno --}}
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-128x128">
                            <img src="/classBoard.png" alt="Logo del curso">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="media-content">
                            <p class="subtitle is-4">Bases de datos</p>
                            <p class="subtitle is-6">Sección: </p>
                            <p class="subtitle is-6">Salón: </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-template>
