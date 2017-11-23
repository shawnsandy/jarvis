 <section class="cover-fold">
        <div class="cover">
            <div class="">
                <div class="has-text-centered">

                    <h1 class="headline is-1 is-uppercase">{{ config("jarvis.name") }}</h1>
                    <h2 class="subtitle is-2 is-capitalized">{{ config("jarvis.description") }}</h2>
                </div>
            </div>

        </div>

        <div class="container search-">

        </div>

    </section>
@push('styles')
<style>
.cover-fold {
    background-image: url("https://source.unsplash.com/KuvEVL7lXYQ/1800x1200" );
    background-size: cover;
    background-position: center center;
}
</style>
@endpush
