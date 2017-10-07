<div class="columns">
    <div class="column">
        <div class="column is-8 is-offset-2">


            <div class="content is-small">

        <div class="section">

                @include("jarvis::install.partials.headline")


                <div class="content has-text-centered">

                    <p><a href="/" class="button osw is-large is-info">Publish Theme</a></p>

                    <p>Publish theme views, assets, configuration to default Laravel directories</p>
                </div>

        </div>
                <div class="columns bar">
                    <div class="column">Name</div>
                    <div class="column">Description</div>
                    <div class="column">Author</div>
                    <div class="column">View Path</div>
                    <div class="column">Action</div>
                </div>

                @foreach(config("jarvis.themes") as $key => $item)


                <div class="columns is-desktop is-uppercase">

                    <div class="column">{{ $item["name"] }}</div>
                    <div class="column">{{ $item["description"] }}</div>
                    <div class="column">{{ $item["author"] }}</div>
                    <div class="column">
                        jarvisThemes::{{ $key }}
                    </div>
                    <div class="column">
                        <a href="/" class="button osw install is-small">Install</a>

                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>


<div class="">



    <h2 class="headliners subtitle has-text-centered is-3">
        Copy & Create Theme
    </h2>

    <form action="/" class="has-text-centered create-view">

        <div class="field has-addons has-addons-centered is-large">
            <p class="control has-icons-left">
                <input class="input is-medium" type="text" placeholder="Name of view directory">
                <span class="icon">
                <i class="ion-android-add-circle"></i>
                </span>
            </p>
            <p class="control">
                <a class="button is-info is-medium">
    <span class="is-size-6">Copy Views</span>
    </a>
            </p>
        </div>

    </form>

</div>
<div class="section content">
<p class="title is-1 has-text-centered">
<a  class="is-link exit-button">
<i class="ion-close-circled back"></i>
</a>
</p>
</div>
