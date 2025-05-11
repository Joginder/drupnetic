// Smooth scroll for internal links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth"
      });
    }
  });
});

// Dark Mode Toggle
const toggleButton = document.getElementById("darkModeToggle");
toggleButton.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  toggleButton.setAttribute(
    "aria-pressed",
    document.body.classList.contains("dark-mode")
  );
});

// Focus Trap Nav Example
const trapNav = document.querySelector(".focus-trap");
const openNavBtn = document.getElementById("openNav");
const closeNavBtn = document.getElementById("closeNav");

if (openNavBtn && closeNavBtn && trapNav) {
  openNavBtn.addEventListener("click", () => {
    trapNav.classList.add("active");
    trapNav.querySelector("a").focus();
  });

  closeNavBtn.addEventListener("click", () => {
    trapNav.classList.remove("active");
    openNavBtn.focus();
  });

  // Keyboard trap handling
  trapNav.addEventListener("keydown", e => {
    const focusableElements = trapNav.querySelectorAll("a, button");
    const firstEl = focusableElements[0];
    const lastEl = focusableElements[focusableElements.length - 1];

    if (e.key === "Tab") {
      if (e.shiftKey) {
        if (document.activeElement === firstEl) {
          e.preventDefault();
          lastEl.focus();
        }
      } else {
        if (document.activeElement === lastEl) {
          e.preventDefault();
          firstEl.focus();
        }
      }
    }

    if (e.key === "Escape") {
      trapNav.classList.remove("active");
      openNavBtn.focus();
    }
  });
}
