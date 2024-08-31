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


// ============================Event JS==========================================================
const eventsData = [
    {
        date: '18 Feb',
        title: 'CITSA Week Celebration 2024',
        time: '01:00 PM - 03:00 PM',
        location: 'Main Auditorium',
        description: 'CITSA is excited to announce CITSA Week Celebration 2024! This year\'s celebration will be held from February 20-24, 2024, and will feature a variety of events and activities for students to enjoy.',
        link: '#'
    },
    {
        date: '18 Feb',
        title: 'Women in Tech: A Panel Discussion',
        time: '01:00 PM - 03:00 PM',
        location: 'Huawei Lab',
        description: 'This panel discussion will feature a group of women working in the tech industry. The panelists will share their experiences and insights on a variety of topics.',
        link: '#'
    },
];

document.addEventListener('DOMContentLoaded', () => {
    const eventsContainer = document.getElementById('events-container-1');
    
    eventsData.forEach(event => {
        const eventCard = document.createElement('div');
        eventCard.className = 'event-card-1';

        eventCard.innerHTML = `
            <div class="event-date-1">
                <span>${event.date}</span>
            </div>
            <h3 class="event-title-1">${event.title}</h3>
            <div class="event-details-1">
                <div class="event-time-1">
                    <span class="arrow-circle-1">➜</span>
                    ${event.time}
                </div>
                <div class="event-location-1">
                    <img src="/images/lo.png" alt="Location Icon" class="location-icon-1" />
                    ${event.location}
                </div>
            </div>
            <p class="event-description-1">${event.description}</p>
        `;

        eventsContainer.appendChild(eventCard);
    });
});
