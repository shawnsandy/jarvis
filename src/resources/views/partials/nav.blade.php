<nav class="navbar top">
    <div class="container">
        <div class="navbar-menu">
            <a href="/" class="navbar-item">Home</a>
            <a href="{{ jarvis_url("view/index" ) }}" class="navbar-item">Theme</a>
            <a href="{{ jarvis_url("view/collection") }}s" class="navbar-item">Collection</a>
            <a href="{{ jarvis_url("view/product") }}" class="navbar-item">Product</a>
            <a href="{{ jarvis_url("view/page") }}" class="navbar-item">Pages</a>
            <a href="{{ jarvis_url("view/about") }}" class="navbar-item">About</a>
        </div>
        <div class="navbar-divider"></div>
        <a href="{{ jarvis_url("view/dashboard") }}" class="navbar-item">Admin</a>
        <a href="{{ jarvis_url("view/login") }}" class="navbar-item">
		<i class="im im-user-circle"></i>
		</a>
    </div>
</nav>
