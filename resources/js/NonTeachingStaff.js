// ========================Hamburger Menu Js====================================

let menuOpen = false; // State to manage the menu open/close state
let subMenuOpen = null; // State to manage the sub-menu open/close state

function toggleMenu() {
  menuOpen = !menuOpen; // Toggle the menu state
  subMenuOpen = null; // Close any open sub-menu when toggling the main menu

  const nav = document.getElementById('navbar');
  if (menuOpen) {
    nav.classList.remove('hidden'); // Show the nav
    nav.classList.add('flex'); // Apply flex to display the nav items
  } else {
    nav.classList.add('hidden'); // Hide the nav
    nav.classList.remove('flex'); // Remove flex to hide the nav items
  }
}

function toggleSubMenu(menu) {
  subMenuOpen = (subMenuOpen === menu) ? null : menu; // Toggle the sub-menu state

  const subMenus = document.querySelectorAll('.sub-menu1');
  subMenus.forEach(subMenu => {
    subMenu.classList.add('hidden');
  });

  if (subMenuOpen) {
    document.getElementById('sub-' + subMenuOpen).classList.remove('hidden');
  }
}

// <!-- ============================Image Slider Section================================== -->
document.addEventListener('DOMContentLoaded', function () {
  let currentSlide = 0;
  const slides = document.querySelectorAll('.img-slider .slider');
  const totalSlides = slides.length;
  let transitioning = false;

  function nextSlide() {
    if (transitioning) return;
    transitioning = true;

    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % totalSlides;
    slides[currentSlide].classList.add('active');

    setTimeout(() => {
      transitioning = false;
    }, 500); // Match this to the CSS transition duration
  }

  setInterval(nextSlide, 3000);
});

