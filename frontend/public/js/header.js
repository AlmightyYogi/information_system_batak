document.addEventListener('DOMContentLoaded', async function () {
    const token = localStorage.getItem('token');
    const usernameDisplay = document.getElementById('usernameDisplay');
    const fullnameDisplay = document.getElementById('fullnameDisplay');
    const dropdownUsernameDisplay = document.getElementById('dropdownUsernameDisplay');
    const navbarFullname = document.getElementById('navbarFullname');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const userDropdown = document.getElementById('userDropdown');
    const navbarToggle = document.getElementById('navbarToggle');
    const navbarClose = document.getElementById('navbarClose');
    const navbarContainer = document.getElementById('navbarContainer');
    const navbarOverlay = document.getElementById('navbarOverlay');
    const logoutButton = document.getElementById('logoutButton');

    if (token) {
        const response = await getProfile(token);
        usernameDisplay.textContent = response.username;
        fullnameDisplay.textContent = response.fullname;
        dropdownUsernameDisplay.textContent = `(${response.username})`;
        navbarFullname.textContent = response.fullname;
    }

    userDropdown.addEventListener('click', function () {
        dropdownMenu.classList.toggle('show');
    });

    navbarToggle.addEventListener('click', function () {
        navbarContainer.classList.toggle('show');
        navbarOverlay.classList.toggle('active');
    });

    navbarClose.addEventListener('click', function () {
        navbarContainer.classList.remove('show');
        navbarOverlay.classList.remove('active');
    });

    navbarOverlay.addEventListener('click', function () {
        navbarContainer.classList.remove('show');
        navbarOverlay.classList.remove('active');
    });

    logoutButton.addEventListener('click', async function () {
        await logout(token);
        localStorage.removeItem('token');
        window.location.href = '/login';
    });
});
