// Responsive Navbar
const primaryNav = document.querySelector(".primary-navigation");
const navToggle = document.querySelector(".nav-toggle");

function toggleNav() {
  const visibility = primaryNav.getAttribute("data-visible");
  if (visibility === "false") {
    primaryNav.setAttribute("data-visible", true);
    navToggle.setAttribute("aria-expanded", true);
  } else if (visibility === "true") {
    primaryNav.setAttribute("data-visible", false);
    navToggle.setAttribute("aria-expanded", false);
  }
}

navToggle.addEventListener("click", toggleNav);

// Sticky Navbar
const hero = document.querySelector(".hero");

const observer = new IntersectionObserver(
  (entries) => {
    const ent = entries[0];
    // console.log(ent);
    ent.isIntersecting === false
      ? hero.classList.add("sticky")
      : hero.classList.remove("sticky");
  },
  {
    root: null,
    rootMargin: "-100px",
    threshold: 0,
  }
);

observer.observe(hero);

// Scroll padding

const navigationHeight = document.querySelector(".primary-header").offsetHeight;
document.documentElement.style.setProperty(
  "--scroll-padding",
  navigationHeight + "px"
);
