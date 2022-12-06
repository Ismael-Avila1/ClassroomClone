<x-template>

    <x-course-navbar :course="$course"></x-course-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">{{ $course->name }}</h1>

    <h2 class="title is-size-2-desktop has-text-centered">Profesor</h2>
    <hr class="navbar-divider">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="/generic-profile.png" alt="Generic profile picture">
                        </figure>
                    </div>

                    <div class="media-content">
                        <p class="title is-4">{{ $teacher->name }}</p>
                        <p class="subtitle is-6">{{ $teacher->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <h2 class="title is-size-2-desktop has-text-centered">Estudiantes</h2>
    <hr class="navbar-divider">
    <div class="container">
        @foreach($students as $student)
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="/generic-profile.png" alt="Generic profile picture">
                        </figure>
                    </div>

                    <div class="media-content">
                        <p class="title is-4">{{ $student->name }}</p>
                        <p class="subtitle is-6">{{ $student->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-template>
