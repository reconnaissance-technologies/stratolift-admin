import './bootstrap';

// Vanilla JS for Dropdown Functionality
document.addEventListener("DOMContentLoaded", function () {
    const profileToggle = document.getElementById("profile-toggle");
    const profileDropdown = document.getElementById("profile-dropdown");
    const dropdownArrow = document.getElementById("dropdown-arrow");

    profileToggle.addEventListener("click", function () {
        profileDropdown.classList.toggle("hidden");
        setTimeout(() => {
            profileDropdown.classList.toggle("opacity-0");
        }, 10);
        dropdownArrow.classList.toggle("rotate-180");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!profileToggle.contains(event.target) && !profileDropdown.contains(event.target)) {
            if (!profileDropdown.classList.contains("hidden")) {
                profileDropdown.classList.add("hidden");
                profileDropdown.classList.add("opacity-0");
                dropdownArrow.classList.remove("rotate-180");
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const mobileMenu = document.querySelector(".mobile-menu");
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenuClose = document.getElementById("mobile-menu-close");

    mobileMenuToggle.addEventListener("click", function() {
        mobileMenu.classList.toggle("-translate-x-full");
    });

    mobileMenuClose.addEventListener("click", function() {
        mobileMenu.classList.add("-translate-x-full");
    });

    window.addEventListener("resize", function() {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.remove("-translate-x-full");
        } else {
            mobileMenu.classList.add("-translate-x-full");
        }
    });
});
