import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const btnToggleSidebar = document.getElementById('btnToggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    function openSidebar() {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
      overlay.classList.add('block');
      document.body.style.overflow = 'hidden'; 
    }

    function closeSidebar() {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.remove('block');
      overlay.classList.add('hidden');
      document.body.style.overflow = ''; 
    }

    btnToggleSidebar.addEventListener('click', () => {
      if (sidebar.classList.contains('-translate-x-full')) {
        openSidebar();
      } else {
        closeSidebar();
      }
    });

    overlay.addEventListener('click', () => {
      closeSidebar();
    });

    // Close sidebar on resize to desktop
    window.addEventListener('resize', () => {
      if(window.innerWidth >= 768) {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.add('hidden');
        overlay.classList.remove('block');
        document.body.style.overflow = '';
      } else {
        sidebar.classList.add('-translate-x-full');
      }
    });

    // Profile dropdown toggle logic
    const btnProfileDropdown = document.getElementById('btnProfileDropdown');
    const profileDropdown = document.getElementById('profileDropdown');

    btnProfileDropdown.addEventListener('click', (e) => {
      e.stopPropagation();
      if (profileDropdown.classList.contains('hidden')) {
        profileDropdown.classList.remove('hidden');
        btnProfileDropdown.setAttribute('aria-expanded', 'true');
      } else {
        profileDropdown.classList.add('hidden');
        btnProfileDropdown.setAttribute('aria-expanded', 'false');
      }
    });

    // Close profile dropdown if clicking outside
    document.addEventListener('click', () => {
      if (!profileDropdown.classList.contains('hidden')) {
        profileDropdown.classList.add('hidden');
        btnProfileDropdown.setAttribute('aria-expanded', 'false');
      }
    });

    // Close dropdown on Escape key press
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !profileDropdown.classList.contains('hidden')) {
        profileDropdown.classList.add('hidden');
        btnProfileDropdown.setAttribute('aria-expanded', 'false');
      }
    });
  });

  function toggleMenu(id) {
    // Close all other menus
    document.querySelectorAll('[id^="menu"]').forEach(menu => {
      if (menu.id !== id) menu.classList.add('hidden');
    });

    const menu = document.getElementById(id);
    if (menu) {
      menu.classList.toggle('hidden');
    }
  }

  // Close menu if clicking outside
  document.addEventListener("click", function (event) {
    const isMenuButton = event.target.closest("[data-menu-id]");
    const isMenuBox = event.target.closest(".z-10");

    if (!isMenuButton && !isMenuBox) {
      document.querySelectorAll('[id^="menu"]').forEach(menu => {
        menu.classList.add('hidden');
      });
    }
  });