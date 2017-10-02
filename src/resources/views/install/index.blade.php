<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <style>
        html {
            color: #4a4a4a;
            -webkit-font-smoothing: antialiased;
            height: 100%;
        }

        .sidebar {

            padding: 10px;
        }

    </style>
</head>

<body>

    <div class="install-page">

        <div class="columns is-marginless">

            <div class="column is-2 is-paddingless">
                <div class="hero is-fullheight is-dark">
                    <div class="sidebar">
                        <section class="section">
                    <div class="container-fluid">
                        <h3 class="title is-4">
                         <i class="fa fa-television"></i>
                         {{ config("jarvis.name") }}
                        </h3>
                        <p class="">Theme Admin Center</p>
                    </div>
                </section>
                    </div>
                </div>
            </div>

            <div class="column is-paddingless">
                <section class="section">
                    <div class="container-fluid">
                        <h3 class="subtitle is-3">
                            Theme Admin
                        </h3>

                    </div>
                </section>
            </div>

        </div>

    </div>

</body>

</html>
