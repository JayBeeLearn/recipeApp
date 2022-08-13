<nav class="navbar navbar-expand nav-light justify-content-between">
    <ul class="nav nav-item">
        <li class="nav-link">
            <a href="{{ route('home') }}" class="">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav">
        @auth
            <li class="nav-item">
                <a href="" class="nav-link">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn nav-link text-primary">
                        Log Out
                    </button>
                </form>
                
            </li>
        @endauth
        @guest
            <li class="nav-link">
            <a href="{{ route('user') }}" class="">Register</a>

        </li>
        <li class="nav-link">
            <a href="{{ route('login') }}" class="">Sign In</a>

        </li>
        @endguest
        
    </ul>
</nav>