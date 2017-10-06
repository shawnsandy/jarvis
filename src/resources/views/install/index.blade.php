@extends('jarvis::install.layout')
@section('content')

<div class="section">
    <div class="column is-8 is-offset-2">
        <div class="container-fluid">

        </div>
        </section>
        <section class="section introduction" data-aos="fade-up" data-aos-duration="500">

            <div class="container-fluid">


                <p class="subtitle is-2 headliners is-uppercase">
                    <i class="fa fa-quote-left"></i> Whoops! It appears that we have not been formally introduced, lets fix
                    that.
                </p>
<hr>
                <div class="content">

                    <p class="">
                        Hi I'm <span class="is-uppercase headliners">{{ config("jarvis.name") }} V{{ config("jarvis.version") }}</span>                        , a simple and smart way to create, package and manage laravel views (themes) built with the
                        <a href="https://github.com/shawnsandy/jarvis-toolkit" class="headliners">Jarvis toolkit,</a>                        thats me :) yay. Now that we are buddies lets get started.
                    </p>

                    <p>
                        I have tried to make this as simple as possible, however if you run into hiccups please feel free to read the
                        <a
                            href="/" class "docs-button">documentation</a> I have found it very helpful at times. Please hit <a href="/" class="start-button">lets get started</a>                            an we shall be on our way. </p>
                    <p>
                        <a href="" class="contribute-button">Contributions</a> are always welcomed, please feel free to submit
                        a PR, feature, fix or fork and create you own.
                    </p>

                </div>



                <div class="section has-text-centered">

                    <div class="columns">

                        <div class="column has-text-right-desktop">
                            <a href="/" class="button osw is-large">
                                                    <span class="icon">
                                                    <i class="ion-document-text"></i>
                                                    </span>
                                                    <span>Read the docs</span>
                                            </a>
                        </div>

                        <div class="column has-text-centered">
                            <a href="/" class="button osw is-large is-info start-button osw">
                                                    <span class="icon">
                                                    <i class="ion-log-in"></i>
                                                    </span>
                                                    <span>
                                                    Lets Get Started
                                                    </span>
                                            </a>
                        </div>
                        <div class="column has-text-left-desktop">
                            <a href="/" class="button is-large osw">
                                                    <span class="icon">
                                                    <i class="icon ion-social-github"></i>
                                                    </span>
                                                    <span>Contribute</span>
                                            </a>
                        </div>


                    </div>
                </div>



            </div>
    </div>

    </section>

    <div>
    @include('jarvis::install.start')
    </div>

</div>

@endsection
