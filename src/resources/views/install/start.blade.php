<div class="modal get-started">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <div class="content">
                @include(Jarvis::views('install.partials.headline'))
                @include(Jarvis::views('install.partials.installer'))

                <p class="has-text-right">
                    <button class="button osw start-button is-light"><span class="ion-close-round"></span></button>
                </p>
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
