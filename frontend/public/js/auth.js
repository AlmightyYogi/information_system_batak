document.addEventListener('DOMContentLoaded', async function () {
    const token = localStorage.getItem('token');

    if (!token && window.location.pathname !== "/") {
        window.location.href = "/login";
    }

    if (token) {
        try {
            const response = await getProfile(token);
            if (!response || response.error) {
                throw new Error("Token expired or invalid");
            }
        } catch (error) {
            localStorage.removeItem('token');
            window.location.href = "/login";
        }
    }
});

window.addEventListener("storage", function (event) {
    if (event.key === "token" && !event.newValue) {
        window.location.href = "/login";
    }
});
