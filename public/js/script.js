// ===== PRELOADER LOGIC =====
function hidePreloader() {
    const preloader = document.getElementById("preloader");
    if (preloader && !preloader.classList.contains("fade-out")) {
        setTimeout(() => {
            preloader.classList.add("fade-out");
            setTimeout(() => {
                preloader.remove();
            }, 500);
        }, 500);
    }
}

if (document.readyState === "complete" || document.readyState === "interactive") {
    hidePreloader();
} else {
    window.addEventListener("load", hidePreloader);
    document.addEventListener("DOMContentLoaded", hidePreloader);
}

// ===== YEAR =====
document.getElementById("year").textContent = new Date().getFullYear();

// ===== HEADER SCROLL =====
const header = document.getElementById("header");
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    if (currentScroll > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
    lastScroll = currentScroll;
});

// ===== MOBILE MENU =====
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");

menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("open");
    document.body.style.overflow = mobileMenu.classList.contains("open")
        ? "hidden"
        : "";
});

// Close mobile menu on link click
mobileMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
        mobileMenu.classList.remove("open");
        document.body.style.overflow = "";
    });
});

// ===== TABS (Experience) =====
const tabs = document.querySelectorAll(".tab");
const panels = document.querySelectorAll(".panel");

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const idx = tab.dataset.tab;

        tabs.forEach((t) => t.classList.remove("active"));
        panels.forEach((p) => p.classList.remove("active"));

        tab.classList.add("active");
        panels[idx].classList.add("active");
    });
});

// ===== FADE-UP ANIMATION (Intersection Observer) =====
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Add fade-up class to sections
document.querySelectorAll(".section, .hero, .feature, .card").forEach((el) => {
    el.classList.add("fade-up");
    observer.observe(el);
});

// ===== SMOOTH SCROLL for nav links =====
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (href === "#") return;

        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
            });
        }
    });
});
