

<div class="content is-size-7 is-uppercase installs">

    <div class="columns is-multiline">

        @foreach(config("jarvis.themes") as $key => $item)


        <div class="column is-4">
            <p class="name">
                <span class="icon"><i class="ion-android-arrow-dropright"></i></span> {{ $item["name"] }}
            </p>
        </div>
        <div class="column is-4">
            <p class="key">{{ $key }}</p>
        </div>
        <div class="column is-4 has-text-right">
            <p class="action"><a href="" class="button is-small is-success">Install</a></p>
        </div>


        @endforeach


    </div>
 <hr>


    <form action="/" class="has-text-centered create-view">

        <div class="field has-addons has-addons-centered">
            <p class="control has-icons-left">
                <input class="input" type="text" placeholder="view::path">
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
