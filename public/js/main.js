// Running Text
const words = ["Petani Emulator"];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
    currentWord = words[i];
    if (isDeleting) {
        document.getElementById("logo").textContent = currentWord.substring(
            0,
            j - 1
        );
        j--;
        if (j == 0) {
            isDeleting = false;
            i++;
            if (i == words.length) {
                i = 0;
            }
        }
    } else {
        document.getElementById("logo").textContent = currentWord.substring(
            0,
            j + 1
        );
        j++;
        if (j == currentWord.length) {
            isDeleting = true;
        }
    }
    setTimeout(type, 300);
}

type();

// Dark Mode Start
document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    const darkModeToggle = document.getElementById("darkModeToggle");
    const moonIcon = document.getElementById("moonIcon");
    const sunIcon = document.getElementById("sunIcon");

    window.addEventListener("DOMContentLoaded", () => {
        const isDark = localStorage.getItem("darkMode") === "true";

        if (isDark) {
            body.classList.add("dark");
            moonIcon.classList.add("hidden");
            sunIcon.classList.remove("hidden");
        } else {
            body.classList.remove("dark");
            moonIcon.classList.remove("hidden");
            sunIcon.classList.add("hidden");
        }
    });

    darkModeToggle.addEventListener("click", () => {
        const isDark = body.classList.toggle("dark");

        localStorage.setItem("darkMode", isDark);
        if (isDark) {
            console.log("Mode gelap");
            moonIcon.classList.add("hidden");
            sunIcon.classList.remove("hidden");
        } else {
            console.log("Mode terang");
            moonIcon.classList.remove("hidden");
            sunIcon.classList.add("hidden");
        }
    });

    // Dark Mode End
    // Sidebar start
    const sidebarToggle = document.getElementById("sidebarToggle");
    const overlay = document.getElementById("overlay");
    const sidebar = document.getElementById("sidebar");
    const menuIcon = document.getElementById("menuIcon");
    const closeIcon = document.getElementById("closeIcon");

    sidebarToggle.addEventListener("click", () => {
        const isOpen = sidebar.classList.contains("-translate-x-full");
        sidebar.classList.toggle("-translate-x-full");
        sidebar.classList.toggle("translate-x-0");

        if (isOpen) {
            console.log("terbuka");
            menuIcon.classList.add("hidden");
            closeIcon.classList.remove("hidden");
            overlay.classList.remove("hidden");
        } else {
            console.log("tertutup");
            menuIcon.classList.remove("hidden");
            closeIcon.classList.add("hidden");
            overlay.classList.add("hidden");
        }
    });
    // Sidebar End
    // Search Animation start
    const searchToggle = document.getElementById("searchToggle");
    const searchoverlay = document.getElementById("searchoverlay");
    const search = document.getElementById("search");
    const searchInput = document.getElementById("searchInput");
    const searchIcon = document.getElementById("searchIcon");
    const searchCloseIcon = document.getElementById("searchCloseIcon");

    searchToggle.addEventListener("click", () => {
        const isOpen = search.classList.contains("-translate-x-full");
        search.classList.toggle("-translate-x-full");
        search.classList.toggle("translate-x-0");

        if (isOpen) {
            console.log("search terbuka");
            searchIcon.classList.add("hidden");
            searchCloseIcon.classList.remove("hidden");
            searchoverlay.classList.remove("hidden");
            setTimeout(() => {
                searchInput.focus();
            }, 300);
        } else {
            console.log("search tertutup");
            searchIcon.classList.remove("hidden");
            searchCloseIcon.classList.add("hidden");
            searchoverlay.classList.add("hidden");
        }
    });
    // Search Animation End
    // User Account Start
    const accountToggle = document.getElementById("accountToggle");
    const accountInfo = document.getElementById("accountInfo");
    const accountOverlay = document.getElementById("accountOverlay");
    const userAccountIcon = document.getElementById("userAccountIcon");
    const userAccountCloseIcon = document.getElementById(
        "userAccountCloseIcon"
    );

    accountToggle.addEventListener("click", () => {
        const isOpen = accountInfo.classList.contains("hidden");
        accountInfo.classList.toggle("hidden");
        accountInfo.classList.toggle("flex");
        if (isOpen) {
            console.log("Account info open");
            accountOverlay.classList.remove("hidden");
            userAccountIcon.classList.add("hidden");
            userAccountCloseIcon.classList.remove("hidden");
        } else {
            console.log("Account info close");
            accountOverlay.classList.add("hidden");
            userAccountIcon.classList.remove("hidden");
            userAccountCloseIcon.classList.add("hidden");
        }
    });
    // User Account End
});
