// Running Text
function createTypewriter(elementId, words, speed = 150) {
    let i = 0;
    let j = 0;
    let isDeleting = false;

    function type() {
        const currentWord = words[i];
        const element = document.getElementById(elementId);

        if (!element) return;

        if (isDeleting) {
            element.textContent = currentWord.substring(0, j--);
            if (j < 0) {
                isDeleting = false;
                i = (i + 1) % words.length;
            }
        } else {
            element.textContent = currentWord.substring(0, j++);
            if (j > currentWord.length) {
                isDeleting = true;
            }
        }

        setTimeout(type, speed);
    }

    type();
}

// dark mode
function createDarkMode(buttonId, moonId, sunId) {
    const button = document.getElementById(buttonId);
    const moon = document.getElementById(moonId);
    const sun = document.getElementById(sunId);
    const body = document.body;

    if (!button || !moon || !sun) return;

    function applyTheme(isDark) {
        body.classList.toggle("dark", isDark);
        moon.classList.toggle("hidden", isDark);
        sun.classList.toggle("hidden", !isDark);
    }

    function loadTheme() {
        const isDark = localStorage.getItem("darkMode") === "true";
        applyTheme(isDark);
    }

    button.addEventListener("click", () => {
        const isDark = !body.classList.contains("dark");
        applyTheme(isDark);
        localStorage.setItem("darkMode", isDark);
    });

    loadTheme();
}

// sidebar
function createSidebar(buttonId, elementId, overlayId, openId, closeId) {
    const button = document.getElementById(buttonId);
    const element = document.getElementById(elementId);
    const overlay = document.getElementById(overlayId);
    const menu = document.getElementById(openId);
    const close = document.getElementById(closeId);

    if (!button || !element || !menu || !close) return;

    function applysidebarState(isOpen) {
        element.classList.toggle("-translate-x-full", !isOpen);
        element.classList.toggle("translate-x-0", isOpen);
        overlay.classList.toggle("hidden");
        menu.classList.toggle("hidden", isOpen);
        close.classList.toggle("hidden", !isOpen);
    }

    button.addEventListener("click", () => {
        // secara default sidebar tertutup (-translate-full)
        const shouldOpen = element.classList.contains("-translate-x-full");
        applysidebarState(shouldOpen);
    });
}

// search
function createSearchAnimation(
    buttonId,
    elementId,
    overlayId,
    inputId,
    openId,
    closeId,
) {
    const button = document.getElementById(buttonId);
    const element = document.getElementById(elementId);
    const overlay = document.getElementById(overlayId);
    const input = document.getElementById(inputId);
    const open = document.getElementById(openId);
    const close = document.getElementById(closeId);

    if (!button || !element || !overlay || !input || !open || !close) return;

    function applySearchAnimation(isOpen) {
        element.classList.toggle("-translate-x-full", !isOpen);
        element.classList.toggle("translate-x-0", isOpen);
        overlay.classList.toggle("hidden");
        setTimeout(() => {
            input.focus();
        }, 300);
        open.classList.toggle("hidden", isOpen);
        close.classList.toggle("hidden", !isOpen);
    }

    button.addEventListener("click", () => {
        const shouldOpen = element.classList.contains("-translate-x-full");
        applySearchAnimation(shouldOpen);
    });
}

// admin
function createAdminNavigation(
    buttonId,
    elementId,
    overlayId,
    openId,
    closeId,
) {
    const button = document.getElementById(buttonId);
    const element = document.getElementById(elementId);
    const overlay = document.getElementById(overlayId);
    const open = document.getElementById(openId);
    const close = document.getElementById(closeId);

    if (!button || !element || !open || !close) return;

    function applyAdminState(isOpen) {
        element.classList.toggle("hidden", !isOpen);
        element.classList.toggle("flex", isOpen);
        overlay.classList.toggle("hidden");
        open.classList.toggle("hidden", isOpen);
        close.classList.toggle("hidden", !isOpen);
    }

    button.addEventListener("click", () => {
        shouldOpen = element.classList.contains("hidden");
        applyAdminState(shouldOpen);
    });
}

// content loaded
document.addEventListener("DOMContentLoaded", function () {
    createTypewriter("logo", ["Petani Emulator"]);
    createDarkMode("darkModeToggle", "moonIcon", "sunIcon");
    createSidebar(
        "sidebarToggle",
        "sidebar",
        "overlay",
        "menuIcon",
        "closeIcon",
    );
    createSearchAnimation(
        "searchToggle",
        "search",
        "searchoverlay",
        "searchInput",
        "searchIcon",
        "searchCloseIcon",
    );
    createAdminNavigation(
        "accountToggle",
        "accountInfo",
        "accountOverlay",
        "userAccountIcon",
        "userAccountCloseIcon",
    );
});
