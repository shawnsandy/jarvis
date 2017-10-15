<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{  config("jarvis.title") }}</title>
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
            text-transform: uppercase;
        }

        .open-sans {

            font-family: 'Open Sans', sans-serif;
        }

        .button.osw {
            text-transform: uppercase;
            font-weight: normal;
            font-family: 'oswald', sans-serif;
            border-radius: 25px;
            text-decoration: none;
        }

        .content a {
            color: #292929;
            text-decoration: none;
            // border-bottom: 1px dotted #292929;
            font-weight: 600;
        }


        .toolbar {
            height: 80px;
            padding: 0 20px;
            background-color: #1f1f1f;
            color: whitesomke;
        }

        .toolbar span {

            text-shadow: rgba(0,0,0,.99) 1px 2px 4px;
            color: lightgray;

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

        .installs .columns {


        }

        .box .installs {
            padding 20px;
        }

        .hide {
            display: none;
        }

        main.section {
            width: 100%
        }
        .round-right-border {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .bar {

            border-bottom: 1px solid lightgray;
            margin-bottom: 10px;
            padding: 5px;

        }

        .page {
            -vendor-animation-duration: 15s;
  -vendor-animation-delay: 11s;
  -vendor-animation-iteration-count: infinite;
        }

        .fade {
                transition: all .3s ease;
    transition-property: all;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: initial;
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
                                    <div class="flex-center">
                                        <div class="headliners is-uppercase subtitle is-2 has-text-centered">
                                            <span class="icon"><i class="ion-grid"></i></span>
                                            <span class="">
                                        {{ config("jarvis.name") }} <span class="is-size-4">V{{ config("jarvis.version") }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>



                    <div class="hero-foot">
                        <div class="section">
                            <div class="content is-small has-text-centered">

                                <p class="is-uppercase">
                                    <span class="author"> Author : {{ config("jarvis.themes.default.author") }}</span> |
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

                    @yield('content')

                    </div>

                </div>


            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/umbrellajs@2.9.0/umbrella.min.js"></script>
        <script>
            AOS.init();

            const animationEnded =
                    "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

                    const startButton = u(".start-button")

            u(".button").on("mouseover", function (e) {

                let elm = e.currentTarget;
                u(elm).addClass("animated pulse").on(animationEnded, function (e) {
                    u(elm).removeClass("animated pulse")
                })
            })


            u(startButton).on("click", function(e) {

                e.preventDefault();

                u(".page").toggleClass("hide").toggleClass("animated zoomInUp").on(animationEnded, function(e) {

                    u(".page").removeClass("animated zoomInUp");

                });

            });

            u(".exit-button").on("click", function(e) {

                e.preventDefault()

                u(".page").toggleClass("hide");

            });

            u(".admin_key").on("change", function(e) {


                u(".validation_key").attr("value", e.currentTarget.value);

                var btn = u(".create-theme")

                u(".key-required").toggleClass("hide fade");

            });

        </script>
        </div>
</body>

</html>
