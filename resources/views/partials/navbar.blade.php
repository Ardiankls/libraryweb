<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" href="/">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Book Collection") ? 'active' : '' }}" href="/">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Borrow List") ? 'active' : '' }}" href="/borrowlist">Borrow List</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Posts</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>