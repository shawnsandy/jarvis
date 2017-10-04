<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Them Name</title>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Oswald:400,500" rel="stylesheet">
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

        .oswald {

            font-family: 'Oswald', sans-serif;
        }

        .open-sans {

            font-family: 'Open Sans', sans-serif;
        }

        a.button {
            text-transform: uppercase;
            font-weight: normal;
            font-family: 'Oswald', sans-serif;
            border-radius: 25px;
            text-decoration: none;
        }

        .subtitle a {
            color: gray;
            text-decoration: underline;
        }

        .navbar-item.subtitle {
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
            overflow: auto ;
        }


    </style>
</head>

<body class="is-light">

    <div class="install-page">

        <div class="columns is-marginless">

            <div class="column is-one-quarter is-paddingless">
                <div class="hero is-fullheight sidebar wrappers">
                    <div class="">
                        <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
                            <div class="navbar-item subtitle is-4 is-uppercase oswald has-text-centered">
                                <span class="icon is-medium"><i class="icon ion-gear-a"></i></span> {{ config("jarvis.name")
                                }} V{{ config("jarvis.version") }}
                            </div>
                        </nav>
                         <img src="https://source.unsplash.com/JVSgcV8_vb4/600x320" alt="" class="image">
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

                                        <p class="subtitle is-1 oswald is-uppercase">
                                            <i class="fa fa-quote-left"></i> Whoops! It appears that we have not been formally
                                            introduced, lets fix that.
                                        </p>
                                        <hr>

                                        <p class="subtitle is-4">
                                            Hi I'm {{ config("jarvis.name") }} V{{ config("jarvis.version") }}, a simple and smart way to manage your laravel views (themes)
                                            built with the Jarvis toolkit, thats me :)-
                                            <a href="">Github repo</a>.
                                        </p>


                                        <div class="section- has-text-centered">

                                            <div class="columns">

                                                <div class="column has-text-right-desktop">
                                                    <a href="/" class="button is-large is-info">
                                                    <span class="icon">
                                                    <i class="icon ion-log-in"></i>
                                                    </span>
                                                    <span>
                                                    Lets Get Started
                                                    </span>
                                            </a>
                                                </div>
                                                <div class="column has-text-centered">
                                                    <a href="/" class="button is-large">
                                                    <span class="icon">
                                                    <i class="icon ion-help-buoy"></i>
                                                    </span>
                                                    <span>Get Support</span>
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

            u(".button").on("mouseover", function(e) {
                var animationEnded = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
                let elm  = e.currentTarget ;
                u(elm).addClass("animated pulse").on(animationEnded, function(animationEnded){
                   u(elm).removeClass("animated pulse")
                })
            })



        </script>
</body>

</html>
