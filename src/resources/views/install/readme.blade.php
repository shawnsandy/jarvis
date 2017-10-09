@extends(Jarvis::views("install.layout")) @section('content')
<div class="container is-fluid">
    <div class="columns is-multiline">

        <div class="column is-8 is-offset-2">
            <div class="column is-12 has-text-centered">
                @include(Jarvis::views("install.partials.headline"))
                <hr>
            </div>
            <div class="content is-medium">
                {!! $page !!}
            </div>

        </div>
    </div>

</div>
@endsection
