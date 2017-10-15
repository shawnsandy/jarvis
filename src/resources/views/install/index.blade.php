@extends(Jarvis::views("install.layout")) @section('content')

<main class="container is-fluid">



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

    </div>


</main>

@endsection
