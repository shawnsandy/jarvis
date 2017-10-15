<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link href="/jarvis/css/blokkfont-b2e761c39d.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.2.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1 class="title">ACME INC</h1>
            <h2 class="subtitle">
                A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
            </h2>
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
                </div>
                <div class="column">
                    <p class="title is-4 is-uppercase">Acme Inc</p>
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
