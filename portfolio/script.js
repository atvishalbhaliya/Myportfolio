const THEME_KEY = "portfolio.theme";

function setTheme(theme) {
  if (!theme) return;
  document.documentElement.dataset.theme = theme;
  try {
    localStorage.setItem(THEME_KEY, theme);
  } catch {}
}

function getTheme() {
  try {
    return localStorage.getItem(THEME_KEY);
  } catch {
    return null;
  }
}

function initTheme() {
  const saved = getTheme();
  if (saved === "light" || saved === "dark") {
    setTheme(saved);
    return;
  }
  const prefersLight = window.matchMedia?.("(prefers-color-scheme: light)")?.matches;
  setTheme(prefersLight ? "light" : "dark");
}

function initNav() {
  const toggle = document.querySelector(".nav-toggle");
  const links = document.getElementById("nav-links");
  if (!toggle || !links) return;

  toggle.addEventListener("click", () => {
    const isOpen = links.classList.toggle("open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") return;
    links.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  });

  document.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof Node)) return;
    if (!links.classList.contains("open")) return;
    if (links.contains(target) || toggle.contains(target)) return;
    links.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  });

  links.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof HTMLAnchorElement)) return;
    links.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  });
}

function initActiveSection() {
  const nav = document.getElementById("nav-links");
  if (!nav) return;
  const navLinks = Array.from(nav.querySelectorAll('a[href^="#"]'));
  const targets = navLinks
    .map((a) => document.querySelector(a.getAttribute("href")))
    .filter((el) => el instanceof HTMLElement);
  if (!targets.length) return;

  const linkForId = new Map();
  navLinks.forEach((a) => {
    const href = a.getAttribute("href");
    if (!href || !href.startsWith("#")) return;
    linkForId.set(href.slice(1), a);
  });

  const observer = new IntersectionObserver(
    (entries) => {
      const visible = entries
        .filter((e) => e.isIntersecting)
        .sort((a, b) => (b.intersectionRatio ?? 0) - (a.intersectionRatio ?? 0))[0];
      if (!visible?.target || !(visible.target instanceof HTMLElement)) return;
      navLinks.forEach((a) => a.removeAttribute("aria-current"));
      const current = linkForId.get(visible.target.id);
      if (current) current.setAttribute("aria-current", "true");
    },
    { rootMargin: "-20% 0px -70% 0px", threshold: [0.1, 0.2, 0.4] },
  );

  targets.forEach((t) => observer.observe(t));
}

function initFooterYear() {
  const year = document.getElementById("year");
  if (year) year.textContent = String(new Date().getFullYear());
}

function initThemeToggle() {
  const btn = document.querySelector(".theme-toggle");
  if (!btn) return;

  btn.addEventListener("click", () => {
    const current = document.documentElement.dataset.theme;
    setTheme(current === "light" ? "dark" : "light");
  });
}

initTheme();
initNav();
initFooterYear();
initThemeToggle();
initActiveSection();
