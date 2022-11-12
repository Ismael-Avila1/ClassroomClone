<x-template title="Información de Usuario">

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
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-template>
