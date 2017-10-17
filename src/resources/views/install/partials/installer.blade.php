<div class="columns">
    <div class="column is-multiline">


        <div class="column is-8 is-offset-2">


            <div class="content is-small">

                <div class="section-">

                    <div class="headliners is-uppercase subtitle is-1 has-text-centered">

                        <span>
                            Manage &amp Install Themes
                        </span>

                    </div>


                    <div class="content has-text-centered">


                        <p>Publish theme views, assets, configuration to default Laravel directories</p>


                        <form action="/jarvis/themes/publish" class="has-text-centered create-view" method="post">

                            <div class="field has-addons has-addons-centered is-large">
                                <p class="control has-icons-left">
                                    <input name="admin_key" class="admin_key input is-medium" type="text" placeholder="Enter validation key" required min="4"
                                        max="25" autocomplete="off"> {{ csrf_field() }}
                                    <span class="icon">
                                        <i class="ion-lock-combination"></i>
                                    </span>
                                </p>
                                <p class="control">
                                    <button type="submit" class="button is-info is-medium rounded-right-border">
                                        <span class="is-size-6">Publish Vendor Files</span>
                                    </button>
                                </p>
                            </div>
                            @if(view()->exists("vendor/".config("jarvis.base_url")."/index"))
                            <div class="is-7 has-text-warning">
                                <span class="has-text-danger">Warning publishing will overwrite existing vendor files. Copy and Create a new theme if you
                                    wish to modify views</span>
                            </div>
                            @endif

                        </form>

                    </div>

                </div>

            </div>
            <h2 class="headliners subtitle has-text-centered is-3">
                Available Themes
            </h2>
            <div class="content is-small">

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

                        jarvisThemes::{{ $item["view"] }}
                    </div>
                    <div class="column">
                        <form name="{{ $item['name'] }}" action="{{ jarvis_url(" themes/installs ") }}" method="post">
                            <input name="validation_key" class="input validation_key is-medium" type="hidden" placeholder="">
                            <input name="view_path" value="{{ $item['view'] }}" class="input is-medium" type="hidden" placeholder="Name of view directory"
                                required min="4" max="25"> {{ csrf_field() }}

                            <button type="submit" class="button osw install is-small">Install</button>
                        </form>
                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>


<div class="">



    <h2 class="headliners subtitle has-text-centered is-3">
        Copy Theme
    </h2>

    <form action="{{ jarvis_url("themes/installs") }}" class="has-text-centered create-view" method="post">
        <input name="validation_key" class="input validation_key is-medium" type="hidden" placeholder="">
        <div class="field has-addons has-addons-centered is-large">
            <p class="control has-icons-left">

                <input name="view_path" class="input is-medium" type="text" placeholder="Name of view directory" required min="4" max="25"> {{ csrf_field() }}
                <span class="icon is-medium">
                    <i class="ion-paintbucket"></i>
                </span>
            </p>
            <p class="control">
                <button type="submit" class="create-theme button is-info is-medium osw">
                    <span class="is-size-6">Copy Views</span>
                </button>
            </p>
        </div>
        <p class="is-size-7 is-warning key-required fade">* Theme admin key is required, please enter it above</p>

    </form>

</div>
