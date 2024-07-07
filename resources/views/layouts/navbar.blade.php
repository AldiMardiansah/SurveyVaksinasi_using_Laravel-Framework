<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Survey</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.index') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('respondents.index') }}">Home</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                    @auth
                        <form action="{{ route('logout') }}" method="post" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>