<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item{{ request()->is('posts') ? ' activate' : '' }}">
                    <a href="/posts" class="nav-link">Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
