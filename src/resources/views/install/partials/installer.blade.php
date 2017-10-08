<div class="columns">
    <div class="column is-multiline">
<div class="column is-12 has-text-centered">
@include("jarvis::partials.messages")
</div>

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

    <form action="/installs" class="has-text-centered create-view" method="post">
<input name="theme_admin_key" class="input v_key is-medium" type="hidden" placeholder="">
        <div class="field has-addons has-addons-centered is-large">
            <p class="control has-icons-left">

                <input name="view_path" class="input is-medium" type="text" placeholder="Name of view directory" required min="4" max="25"> {{ csrf_field() }}
                <span class="icon">
                    <i class="ion-android-add-circle"></i>
                </span>
            </p>
            <p class="control">
                <button type="submit" class="create-theme button is-info is-medium osw">
                    <span class="is-size-6">Copy Views</span>
                </button>
            </p>
        </div>
        <p class="is-size-7 is-warning">* Theme admin key is required above</p>

    </form>

</div>
