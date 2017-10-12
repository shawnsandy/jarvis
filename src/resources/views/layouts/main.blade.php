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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> @include(jarvis_views('partials.header')) @stack('styles')

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Generate using http://realfavicongenerator.net/ -->
</head>

<body id="body" class="{{ $theme_class or " page " }} frontend">

    @yield('content')

    @include(Jarvis::views("partials.footer")) @stack('scripts')

</body>

</html>
