document.addEventListener("DOMContentLoaded", function () {
    const navbarToggle = document.getElementById("navbarToggle");
    const navbarClose = document.getElementById("navbarClose");
    const navbarContainer = document.getElementById("navbarContainer");
    const navbarOverlay = document.getElementById("navbarOverlay");

    navbarToggle.addEventListener("click", () => {
        navbarContainer.classList.add("show");
        navbarOverlay.classList.add("show");
    });

    navbarClose.addEventListener("click", () => {
        navbarContainer.classList.remove("show");
        navbarOverlay.classList.remove("show");
    });

    navbarOverlay.addEventListener("click", () => {
        navbarContainer.classList.remove("show");
        navbarOverlay.classList.remove("show");
    });
});
