<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link href="/jarvis/css/blokkfont-b2e761c39d.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    @include(Jarvis::views('partials.header'))

    @stack('styles')

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->
</head>

<body id="body" class="{{ $theme_class or " page " }} frontend">
    <div class="is-dark">

        @include(Jarvis::views('partials.nav'))

    </div>

    <section class="section header">
        <div class="container">
            <p class="title is-size-4 is-uppercase">{{ config("jarvis.name") }}</p>
            <p class="subtitle is-5">
                {{ config("jarvis.description") }}
            </p>
        </div>
    </section>

    @yield('content')

    <footer class="footer section">

        <div class="container">
            <div class="columns">
                <div class="column is-2">
                    <p class="title is-4 is-uppercase">Logo</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Recent Articles</p>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Id saepe ratione corrupti natus iste.</p>
                    <p>Vero quam porro maxime quae sed?</p>
                    <p>Incidunt fuga non harum sequi ad.</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Acme Inc</p>
                    <p class="is-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nisi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, at.</p>
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Contact us</p>
                    <address>
                        <p>
                            8328 Somewhere out there <br> FL 00000 <br>
                            <abbr title="Phone">Office:</abbr> 000-000-0999<br>
                            <abbr title="Phone">Fax:</abbr> 000-000-0999<br>
                        </p>

                        <p>
                            © 2017 All right reserved
                        </p>

                    </address>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <p class="has-text-centered is-size-5">
                    Copyright Acme Inc All rights resevered
                </p>
            </div>
        </div>
        <div>
            <a data-scroll href="#body" class="back-to-top hide">
  <i class="im im-arrow-up-circle is-2"></i>
  </a>
        </div>
    </footer>


    @include(Jarvis::views("partials.footer"))
    @stack('scripts')



</body>

</html>
