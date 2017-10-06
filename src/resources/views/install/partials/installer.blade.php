 <div class="columns">
            <div class="column">
                <div class="column">

                    <div class="content is-small">

                        @include("jarvis::install.partials.headline")


<div class="section has-text-centered">

<p><a href="/" class="button osw is-large is-info">Publish Theme</a></p>

<p>Publish theme views, assets, configuration to default directories</p>
</div>




                        <div class="is-fluid">
                        <div class="columns">
                        <div class="column">Name</div>
                        <div class="column">Description</div>
                        <div class="column">Author</div>
                        <div class="column">View Path</div>
                        <div class="column">Action</div>
                        </div>

                        </div>
   <hr>
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
       <hr>

        <div class="section">



<h2 class="headliners subtitle has-text-centered is-3">
Copy & Create Theme
</h2>

            <form action="/" class="has-text-centered create-view">

                <div class="field has-addons has-addons-centered is-large">
                    <p class="control has-icons-left">
                        <input class="input" type="text" placeholder="jarvisThemes::views_dir">
                        <span class="icon is-small">
                <i class="ion-ios-compose-outline"></i>
                </span>
                    </p>
                    <p class="control">
                        <a class="button is-info">
      Create
    </a>
                    </p>
                </div>

            </form>

        </div>
