@extends('jarvis::install.layout') @section('content')

<main class="section">

    <div class="container-fluid page">

        @include("jarvis::install.partials.introduction")

    </div>

    <div class="section installs page hide">

    @include("jarvis::install.partials.installer")

    </div>


</main>

@endsection
