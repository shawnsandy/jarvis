@extends(jarvis_views("install.layout")) @section('content')

<div class="columns">

    <div class="column is-12 has-text-centered">
        @include(Jarvis::views("partials.messages"))
    </div>

</div>

<div class="column is-10 is-offset-1">

    <div class="section">
        @include(Jarvis::views("install.partials.headline"))
    </div>
<h2 class="headliners subtitle has-text-centered is-3">
        .env Generators
    </h2>
    <hr>
    <div class="content is-small">



        <div class="columns">

            <div class="column">
                <form action="">

                    {{ csrf_field() }}
                    @foreach($env as $item => $value)
                    <div class="field">
                        <label class="label is-small">{{ str_replace("_", " ", $item ) }}</label>
                        <div class="control">
                            <input name="{{ $item }} " class="input is-small" type="text" placeholder="Enter key" value="{{ $value }}">
                        </div>
            </div>

            @endforeach


            </form>


        </div>

        <div class="column">
            <p>
                <p>
                    {{ dump($env) }}
                </p>
            </p>
        </div>
    </div>




</div>

</div>


@endsection
