const navLinks = document.querySelectorAll('.nav__link');
navLinks.forEach(navLink => {
  
    navLink.addEventListener('click', function() {
     navLinks.forEach(link => link.classList.remove('active'));
    this.classList.add('active');
    document.querySelector('#navbar').classList.add('expander');
    document.querySelector('#body-pd').classList.add('body-pd');
    });
});

const collapseLinks = document.querySelectorAll('.collapse__link');
collapseLinks.forEach(collapseLink => {
 collapseLink.addEventListener('click', function() {
    console.log('testing click');
      const navLink = this.closest('.nav__link');

        if (navLink) {
         navLink.classList.toggle('showCollapse');
        }
    });
});
