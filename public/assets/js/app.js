// Loader function
window.onload = function loader() {
    setTimeout(() => {
        const preloader = document.getElementById("preloader");
        preloader.style.visibility = "hidden";
        preloader.style.opacity = "0";
    }, 350);
    activateMenu();
    activateSidebarMenu();
};

// Toggle menu
function toggleMenu() {
    document.getElementById("isToggle").classList.toggle("open");
    const navigation = document.getElementById("navigation");
    navigation.style.display = (navigation.style.display === "block") ? "none" : "block";
}

// Polyfill for closest()
function getClosest(elem, selector) {
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.msMatchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function (s) {
                const matches = (this.document || this.ownerDocument).querySelectorAll(s);
                let i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) { }
                return i > -1;
            };
    }

    for (; elem && elem !== document; elem = elem.parentNode) {
        if (elem.matches(selector)) return elem;
    }
    return null;
}

// Activate current menu item
function activateMenu() {
    const menuItems = document.getElementsByClassName("sub-menu-item");
    if (!menuItems) return;

    let matchingMenuItem = null;
    for (let i = 0; i < menuItems.length; i++) {
        if (menuItems[i].href === window.location.href) {
            matchingMenuItem = menuItems[i];
        }
    }

    if (matchingMenuItem) {
        matchingMenuItem.classList.add("active");

        const parentItem = getClosest(matchingMenuItem, ".parent-menu-item");
        if (parentItem) parentItem.classList.add("active");

        const parentParentItem = getClosest(matchingMenuItem, ".menu-item");
        if (parentParentItem) {
            parentParentItem.classList.add("active");

            const menuParent = parentParentItem.querySelector(".parent-parent-menu-item");
            if (menuParent) menuParent.classList.add("active");

            const higherParent = getClosest(parentParentItem, ".parent-menu-item");
            if (higherParent) higherParent.classList.add("active");
        } else {
            const higherParent = getClosest(matchingMenuItem, ".parent-menu-item");
            if (higherParent) higherParent.classList.add("active");
        }
    }
}

// Activate sidebar menu
function activateSidebarMenu() {
    const pageName = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (pageName === "" || !document.getElementById("sidebar")) return;

    const links = document.querySelectorAll("#sidebar a");
    for (let i = 0; i < links.length; i++) {
        if (links[i].getAttribute("href").indexOf(pageName) !== -1) {
            links[i].parentElement.className += " active";

            const dropdown = links[i].querySelector(".sidebar-submenu");
            if (dropdown) dropdown.classList.add("active");

            const parentDropdown = links[i].querySelector(".sidebar-dropdown");
            if (parentDropdown) parentDropdown.classList.add("active");
        }
    }
}

// Sidebar collapse
if (document.getElementById("navigation")) {
    document.getElementById("navigation").addEventListener("click", () => {
        document.getElementsByClassName("parent-menu-item")[0].classList.toggle("open");
    });
}

// Toggle class for sidebar nav-sticky
function windowScroll() {
    const topnav = document.getElementById("topnav");
    if (!topnav) return;

    if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
        topnav.classList.add("nav-sticky");
    } else {
        topnav.classList.remove("nav-sticky");
    }
}

window.addEventListener("scroll", (event) => {
    event.preventDefault();
    windowScroll();
});

// Scroll to top button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    const topBtn = document.getElementById("back-to-top");
    if (!topBtn) return;

    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        topBtn.style.display = "block";
    } else {
        topBtn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Feather icons
feather.replace();

// Dropdown close on click
if (document.getElementsByClassName("dd-menu").length > 0) {
    const ddmenu = document.getElementsByClassName("dd-menu");
    for (let i = 0; i < ddmenu.length; i++) {
        ddmenu[i].onclick = function (e) {
            e.stopPropagation();
        };
    }
}

// Highlight sidebar menu active item
(function () {
    const pageName = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (pageName === "") return;

    const links = document.querySelectorAll("[data-bs-toggle=\"tooltip\"]");
    for (let i = 0; i < links.length; i++) {
        if (links[i].getAttribute("href").indexOf(pageName) !== -1) {
            links[i].parentElement.className += " active";
        }
    }
})();

// Needs validation form
(function () {
    if (document.getElementsByClassName("needs-validation").length > 0) {
        const forms = document.querySelectorAll(".needs-validation");
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener("submit", function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            }, false);
        });
    }
})();

// Bootstrap tooltip
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Set theme
function setTheme(theme) {
    document.getElementById("theme-opt").href = "../assets/css/" + theme + ".min.css";
}
