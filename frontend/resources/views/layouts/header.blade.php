<header class="header-container">
    <div class="left-section">
        <button class="user-dropdown" id="userDropdown">
            <i class="bi bi-person-circle"></i>
            <span id="usernameDisplay">Loading...</span>
        </button>
        <div class="dropdown-menu" id="dropdownMenu">
            <div class="dropdown-user-info">
                <div class="dropdown-header">
                    <i class="bi bi-person-fill"></i> Informasi Pengguna
                </div>
                <hr>
                <div class="user-detail">
                    <p><i class="bi bi-person"></i> <strong>Username:</strong></p>
                    <p id="dropdownUsernameDisplay">Loading...</p>
                </div>
                <div class="user-detail">
                    <p><i class="bi bi-card-text"></i> <strong>Fullname:</strong></p>
                    <p id="fullnameDisplay">Loading...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="header-title">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="header-text">
            <h1>Sistem Informasi</h1>
            <h2>Aksara Batak Toba</h2>
        </div>
    </div>

    <button class="navbar-toggle" id="navbarToggle">
        <i class="bi bi-list"></i>
    </button>
</header>

<div class="navbar-overlay" id="navbarOverlay"></div>

<div class="navbar-container" id="navbarContainer">
    <button class="navbar-toggle navbar-close" id="navbarClose">
        <i class="bi bi-x-lg"></i>
    </button>

    <div class="navbar-header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="navbar-title">
            <h1>Sistem Informasi</h1>
            <h2>Aksara Batak Toba</h2>
        </div>
    </div>

    <nav class="navbar-menu">
        <a href="/dashboard">Beranda</a>
        <a href="/sejarah">Sejarah Batak Toba</a>
        <a href="/aksara">Aksara Batak Toba</a>
        <a href="/kamus">Kamus</a>
        <a href="/profile">Profile</a>
    </nav>

    <div class="navbar-logout">
        <span id="navbarFullname">Loading...</span>
        <button id="logoutButton">Sign Out <i class="bi bi-box-arrow-right"></i></button>
    </div>
</div>