@extends(Jarvis::views("install.layout")) @section('content')

<main class="container is-fluid">


@themeExists("jarvis")

@include(jarvis_views("install.partials.installer"))

@else
    @if (count($errors)
    < 1) <div class="page">
    @include(Jarvis::views("partials.messages"))

        @include(Jarvis::views("install.partials.introduction"))

    </div>

    <div class="section installs page hide">
    @include(Jarvis::views("partials.messages"))
    @else

    <div class="section installs page">

    @endif

    @include(Jarvis::views("install.partials.installer"))

<div class="section has-text-centered">
<button class="button is-medium start-button osw">Cancel</button>

</div>


    </div>


@endif
</main>

@endsection
