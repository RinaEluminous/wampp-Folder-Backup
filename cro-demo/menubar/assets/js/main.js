document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav__link');
    const navbar = document.querySelector('#navbar');
    const bodyPd = document.querySelector('#body-pd');
  
    navLinks.forEach(navLink => {
        navLink.addEventListener('click', function(event) {
            // Check if the clicked element is an arrow icon
            if (event.target.classList.contains('collapse__link') || event.target.closest('.collapse__link')) {
                // Toggle the corresponding submenu
                const collapseMenu = this.querySelector('.collapse__menu');
                if (collapseMenu) {
                    const isOpen = collapseMenu.classList.contains('showCollapse');
                                                                                  
                    // Close all submenus
                    document.querySelectorAll('.collapse__menu').forEach(menu => menu.classList.remove('showCollapse'));
  
                    // Open the clicked submenu if it was not open
                    if (!isOpen) {
                        collapseMenu.classList.add('showCollapse');
                    }
                }
                event.stopPropagation(); // Stop the event from propagating to prevent sidebar collapse
            } else if (event.target.classList.contains('nav__icon') || event.target.classList.contains('nav__name')) {
                // Handle active state, toggle sidebar, and close all submenus when nav__icon or nav__name is clicked
                navLinks.forEach(link => link.classList.remove('active'));
                navLinks.forEach(link => link.classList.remove('open'));
                this.classList.add('active');
                this.classList.add('open');
  
                if (navbar.classList.contains('expander')) {
                    navbar.classList.remove('expander');
                    bodyPd.classList.remove('body-pd');
                } else {
                    navbar.classList.add('expander');
                    bodyPd.classList.add('body-pd');
                }
  
                // Close all submenus
                document.querySelectorAll('.collapse__menu').forEach(menu => menu.classList.remove('showCollapse'));
            } else {
                // Handle active state
                navLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
                navLinks.forEach(link => link.classList.remove('open'));
                this.classList.add('open');
                navbar.classList.add('expander');
                bodyPd.classList.add('body-pd');
            }
        });
    });
  });
  