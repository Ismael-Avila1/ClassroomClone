<x-template>

    <x-user-navbar :$teachingCourses :$enrolledCourses ></x-user-navbar>

    <h1 class="title is-size-1-desktop has-text-centered">Perfil de Usuario</h1>

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
                        <p class="title is-4">{{ $user->name }}</p>
                        <p class="subtitle is-6">{{ $user->email }}</p>
                        <a class="button is-outlined" href="{{ $user->id }}/edit">Editar Información del Usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-template>
