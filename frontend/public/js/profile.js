document.addEventListener("DOMContentLoaded", async function () {
    const API_URL = "http://127.0.0.1:3000/api";
    const token = localStorage.getItem("token");

    if (!token) {
        alert("Anda belum login. Silakan login terlebih dahulu.");
        window.location.href = "/login";
        return;
    }

    try {
        const response = await fetch(`${API_URL}/profile`, {
            method: "GET",
            headers: { "Authorization": `Bearer ${token}` }
        });

        if (response.status === 401) {
            alert("Sesi Anda telah berakhir. Silakan login kembali.");
            localStorage.removeItem("token");
            window.location.href = "/login";
            return;
        }

        if (!response.ok) {
            console.warn("Gagal mengambil data profil:", response.statusText);
        }

        const data = await response.json();

        document.getElementById("profile-fullname").innerText = data.fullname || "No Name";
        document.getElementById("profile-username").innerText = `@${data.username}`;
        document.getElementById("info-fullname").innerText = data.fullname || "N/A";
        document.getElementById("info-username").innerText = data.username || "N/A";
        // document.getElementById("info-email").innerText = data.email || "N/A";
        document.getElementById("info-joined").innerText = data.created_at ? new Date(data.created_at).toDateString() : "N/A";

        if (data.avatar) {
            document.getElementById("profile-avatar").src = data.avatar;
        }
    } catch (error) {
        console.error("Terjadi kesalahan saat mengambil data profil:", error);
    }

    // Logout
    document.getElementById("logout-btn").addEventListener("click", async function () {
        try {
            const response = await fetch(`${API_URL}/logout`, {
                method: "POST",
                headers: { "Authorization": `Bearer ${token}` }
            });

            if (response.ok) {
                localStorage.removeItem("token");
                alert("Logout berhasil.");
                window.location.href = "/login";
            } else {
                alert("Gagal logout.");
            }
        } catch (error) {
            console.error("Logout Error:", error);
        }
    });
});
