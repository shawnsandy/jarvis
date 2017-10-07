@if (count($errors) > 0)
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="notification is-success">
    <div class="section">{{ session('success') }}</div>
    </div>
@endif

@if(session('info'))
    <div class="notification is-primary">
    <div class="section">{{ session('info') }}</div>

    </div>
@endif

@if(session('warning'))
    <div class="notification is-warning">
    <div class="section"> {{ session('warning') }}</div>

    </div>
@endif

@if(session('error'))
    <div class="notification is-danger">
    <div class="section">{{ session('error') }}</div>

    </div>
@endif
