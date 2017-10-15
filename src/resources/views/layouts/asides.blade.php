<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>



    </title>

@include(jarvis_views("partials.asides.header"))

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->



</head>

<body class="asides">


    <div class="page">

        <div class="columns is-marginless">


            <div class="column is-one-quarter is-light is-paddingless">

                <div class="side-nav">

                @include(jarvis_views("partials.asides.side-nav"))

                </div>

            </div>

            <div class="column is-paddingless">

                <!-- content -->
                @yield("content")
                <!-- endcontent -->

            </div>

        </div>

    </div>



    <script src="/jarvis/js/app-40a6ab64e2c8ef467e4c.js"></script>



</body>

</html>
