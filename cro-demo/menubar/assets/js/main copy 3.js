document.addEventListener("DOMContentLoaded", function() {
  // Function to handle clicks
  function handleNavClick(event) {
      const target = event.target;

      // Check if the click is on nav__link, nav__name, nav__icon, or collapse__link
      if (target.classList.contains('nav__link') || 
          target.classList.contains('nav__name') || 
          target.classList.contains('nav__icon') || 
          target.classList.contains('collapse__link')) {
              
          console.log('Clicked on:', target);
          
          // If the target is a collapse__link, toggle the collapse__menu
          // if (target.classList.contains('collapse__link')) {
          //     const collapseMenu = target.closest('.nav__link').querySelector('.collapse__menu');
          //     collapseMenu.classList.toggle('active');
          // }

          if (target.classList.contains('nav__link')) {
            console.log('collapse__link');
          }
      }
  }

  // Add event listeners to nav__link elements
  document.querySelectorAll('.nav__link').forEach(link => {
      link.addEventListener('click', handleNavClick);
  });

  // Add event listeners to nav__name elements
  document.querySelectorAll('.nav__name').forEach(name => {
      name.addEventListener('click', handleNavClick);
  });

  // Add event listeners to nav__icon elements
  document.querySelectorAll('.nav__icon').forEach(icon => {
      icon.addEventListener('click', handleNavClick);
  });

  // Add event listeners to collapse__link elements
  document.querySelectorAll('.collapse__link').forEach(link => {
      link.addEventListener('click', handleNavClick);
  });
});
