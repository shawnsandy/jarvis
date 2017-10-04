<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Them Name</title>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|headliners:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <style>
        html {
            color: #4a4a4a;
            -webkit-font-smoothing: antialiased;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
        }

        body,
        p {
            font-family: 'Open Sans', sans-serif;
            color: gray;
        }

        .sidebar {
            padding: 0;
            background-color: #252525;
        }

        .headliners {

            font-family: 'oswald', sans-serif;
        }

        .open-sans {

            font-family: 'Open Sans', sans-serif;
        }

        a.button {
            text-transform: uppercase;
            font-weight: normal;
            font-family: 'oswald', sans-serif;
            border-radius: 25px;
            text-decoration: none;
        }

        .subtitle a {
            color: gray;
            text-decoration: underline;
        }


        .toolbar {
            height: 80px;
            padding: 0 20px;
            background-color: #1f1f1f;
        }


        .hero.nav.subtitle {
            color: #fff;
        }

        .navbar {
            background-color: #1f1f1f;
            height: 100px;
        }

        .subtitle {
            color: #8a8a8a;
        }

        .wrappers {
            height: 100vh;
            overflow: auto;
        }

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }


        .flex-right {
            justify-content: right;
        }


        .flex-left {
            justify-content: left;
        }

    </style>
</head>

<body class="is-light">

    <div class="install-page">

        <div class="columns is-marginless">

            <div class="column is-one-quarter is-paddingless">
                <div class="hero is-fullheight sidebar wrappers">

                    <div class="hero-head">
                        <div class="container-fluid">
                            <img src="https://source.unsplash.com/JVSgcV8_vb4/600x320" alt="" class="image">
                            <nav>
                                <div class="container-fluid toolbar">
                                    <div class="flex-center flex-left">
                                        <div class="headliners is-uppercase subtitle is-2 has-text-centered">
                                            <span class="icon is-medium"><i class="ion-gear-a"></i></span>
                                            <span class="">
                                        {{ config("jarvis.name") }} <span class="is-size-4">V{{ config("jarvis.version") }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="hero-body">



                    </div>

                    <div class="hero-foot">
                        <div class="section">
                            <div class="content is-small has-text-centered">

                                <p class="is-uppercase">
                                    <span class="author"> Built by: {{ config("jarvis.theme.default.author") }}</span> |
                                    <span class="larevel-credits">Powered by Laravel {{ App::version() }}</span>
                                </p>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="main column is-paddingless wrappers">
                <div class="hero is-fullheight">
                    <div class="hero-body">

                        <div class="section">
                            <div class="column is-8 is-offset-2">
                                <div class="container-fluid">

                                </div>
                                </section>
                                <section class="section" data-aos="fade-up" data-aos-duration="800">

                                    <div class="container-fluid">

                                        <p class="subtitle is-2 headliners is-uppercase">
                                            <i class="fa fa-quote-left"></i> Whoops! It appears that we have not been formally
                                            introduced, lets fix that.
                                        </p>
                                        <hr>

                                        <p class="subtitle is-4">
                                            Hi I'm {{ config("jarvis.name") }} V{{ config("jarvis.version") }}, a simple and smart way to create, package and manage
                                            your laravel views (themes) built with the
                                            <a href="https://github.com/shawnsandy/jarvis-toolkit" class="is-capitalized">Jarvis toolkit,</a> thats me :) yay.
                                        </p>


                                        <div class="section- has-text-centered">

                                            <div class="columns">

                                                <div class="column has-text-right-desktop">
                                                    <a href="/" class="button is-large">
                                                    <span class="icon">
                                                    <i class="ion-help-buoy"></i>
                                                    </span>
                                                    <span>View The Readme</span>
                                            </a>
                                                </div>

                                                <div class="column has-text-centered">
                                                    <a href="/" class="button is-large is-info">
                                                    <span class="icon">
                                                    <i class="ion-log-in"></i>
                                                    </span>
                                                    <span>
                                                    Lets Get Started
                                                    </span>
                                            </a>
                                                </div>
                                                <div class="column has-text-left-desktop">
                                                    <a href="/" class="button is-large is-light">
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


                        </div>


                    </div>
                </div>

            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/umbrellajs@2.9.0/umbrella.min.js"></script>
        <script>
            AOS.init();

            u(".button").on("mouseover", function (e) {
                var animationEnded =
                    "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
                let elm = e.currentTarget;
                u(elm).addClass("animated pulse").on(animationEnded, function (animationEnded) {
                    u(elm).removeClass("animated pulse")
                })
            })

        </script>
</body>

</html>
