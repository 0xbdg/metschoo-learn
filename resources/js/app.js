import './bootstrap';

// Mobile sidebar toggle
        document.getElementById('openSidebar').addEventListener('click', function() {
            document.getElementById('mobileSidebar').classList.remove('-translate-x-full');
            document.getElementById('sidebarBackdrop').classList.remove('hidden');
        });

        document.getElementById('closeSidebar').addEventListener('click', function() {
            document.getElementById('mobileSidebar').classList.add('-translate-x-full');
            document.getElementById('sidebarBackdrop').classList.add('hidden');
        });

        document.getElementById('sidebarBackdrop').addEventListener('click', function() {
            document.getElementById('mobileSidebar').classList.add('-translate-x-full');
            this.classList.add('hidden');
        });

        // Users dropdown toggle
        document.querySelector('.users-dropdown-btn').addEventListener('click', function() {
            document.querySelector('.users-dropdown-content').classList.toggle('hidden');
        });

        // User menu toggle
        document.getElementById('userMenuButton').addEventListener('click', function() {
            document.getElementById('userMenu').classList.toggle('hidden');
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.users-dropdown-btn') && !event.target.closest('.users-dropdown-content')) {
                document.querySelector('.users-dropdown-content').classList.add('hidden');
            }
            
            if (!event.target.closest('#userMenuButton') && !event.target.closest('#userMenu')) {
                document.getElementById('userMenu').classList.add('hidden');
            }
        });