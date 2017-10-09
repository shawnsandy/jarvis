<nav class="navbar top">
    <div class="container">
        <div class="navbar-menu">
            <a href="/" class="navbar-item">Home</a>
            <a href="{{ jarvis_url("index" ) }}" class="navbar-item">Theme</a>
            <a href="{{ jarvis_url("collection") }}s" class="navbar-item">Collection</a>
            <a href="{{ jarvis_url("product") }}" class="navbar-item">Product</a>
            <a href="{{ jarvis_url("page") }}" class="navbar-item">Pages</a>
            <a href="{{ jarvis_url("about") }}" class="navbar-item">About</a>
        </div>
        <div class="navbar-divider"></div>
        <a href="{{ jarvis_url("dashboard") }}" class="navbar-item">Admin</a>
        <a href="{{ jarvis_url("login") }}" class="navbar-item">
		<i class="im im-user-circle"></i>
		</a>
    </div>
</nav>
