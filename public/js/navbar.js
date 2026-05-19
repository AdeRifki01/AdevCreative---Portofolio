window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".custom-navbar");
    if (navbar) {
        navbar.classList.toggle("navbar-scrolled", window.scrollY > 50);
    }
});

// Dark/Light Theme Toggle Logic
document.addEventListener("DOMContentLoaded", () => {
    const themeCheckbox = document.getElementById("themeToggleCheckbox");

    // Check for saved theme preference, default to dark mode
    const currentTheme = localStorage.getItem("theme") || "dark";

    if (currentTheme === "light") {
        document.body.classList.add("light-mode");
        if (themeCheckbox) {
            themeCheckbox.checked = true;
        }
    } else {
        document.body.classList.remove("light-mode");
        if (themeCheckbox) {
            themeCheckbox.checked = false;
        }
    }

    // Toggle theme when checkbox changes
    if (themeCheckbox) {
        themeCheckbox.addEventListener("change", function () {
            if (this.checked) {
                document.body.classList.add("light-mode");
                localStorage.setItem("theme", "light");
            } else {
                document.body.classList.remove("light-mode");
                localStorage.setItem("theme", "dark");
            }
        });
    }
});
