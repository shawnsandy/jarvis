@php
$theme_class = "front-page";
@endphp
@extends(jarvis_views('layouts.theme')) @section('content') @include(jarvis_views('components.cover'))

<section class="actions section is-medium">

    <div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="subtitle is-1 has-text-centered">
                    Blanditiis accusantium doloribus quam at. Aliquam possimus, sequi quos optio maxime deserunt dolor modi facilis!
                </h1>

            </div>

        </div>
    </div>

</section>


<section class="section is-medium featured">

    <div class="container">

        <div class="container">

            <div class="columns is-multiline">

                <div class="column is-4">
                    @include(jarvis_views("components.card"))
                </div>

                <div class="column is-4">

                    @include(jarvis_views("components.card"))
                </div>

                <div class="column is-4">

                    @include(jarvis_views("components.card"))
                </div>

            </div>

        </div>


    </div>

</section>

<main class="section is-medium">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <h2 data-module="example" class="article article-h1">
                    Blendid!
                </h2>
                <p class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos tenetur assumenda quaerat quam possimus laudantium
                    perferendis cum, iusto debitis delectus molestiae officiis atque, consequuntur! Temporibus saepe quis
                    aliquam non. Perspiciatis!
                </p>
                <p>
                    Lorem lipsum
                </p>
            </div>
            <div class="column">
                <h3 class="article article-h3">Sidebar</h3>
                <p class="lorem">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
</main>
<hr>
<section class="section">
    <div class="container">

        <h2 class="title is-2">Collections</h2>

        <div class="columns">

            <div class="column">

                <div class="collection">
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, porro?
                    </p>
                </div>
                <div class="collection">
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, porro?
                    </p>
                </div>
                <div class="collection">
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, porro?
                    </p>
                </div>
                <div class="collection">
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, porro?
                    </p>
                </div>
                <div class="collection">
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, porro?
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="section is-medium">
    <div class="container">
        <div class="columns">

            <div class="column">
                <div class="cards">
                    <div class="card-content">
                        <p class="class">
                            Quia ex et reprehenderit cum sit maxime.
                        </p>

                    </div>
                </div>
            </div>


            <div class="column">
                <div class="cards">
                    <div class="card-content">
                        <p class="class">
                            Quia ex et reprehenderit cum sit maxime.
                        </p>
                    </div>
                </div>

            </div>




            <div class="column">
                <div class="cards">
                    <div class="card-content">
                        <p class="class">
                            Quia ex et reprehenderit cum sit maxime.
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
