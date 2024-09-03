<header class="header">
    <nav class="navbar">
        <div class="logo">
            <h2 class="logo-heading">Sakib Bin Ehsan</h2>
        </div>
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars hamburger-icon"></i>
            <i class="fas fa-times cross-icon"></i>
        </div>
        <div class="menu">
            <ul class="menu-list">
                <li class="menu-list-items">
                    <a class="links" href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="menu-list-items">
                    <a class="links" href="{{ url('experiences') }}">
                        Experiences
                    </a>
                </li>
                <li class="menu-list-items">
                    <a class="links" href="{{ url('projects') }}">
                        Projects
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>