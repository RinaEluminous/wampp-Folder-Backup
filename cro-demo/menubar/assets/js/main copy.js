   
    const navLinks = document.querySelectorAll('.nav__link');

    navLinks.forEach(navLink => {
      
        navLink.addEventListener('click', function(event) {
          console.log('testing nav link');
           
            if (this.classList.contains('active') && (event.target.classList.contains('nav__icon') || event.target.classList.contains('nav__name'))) {
              console.log('>>>>>>>>>>');
                if (this === event.target.closest('.nav__link')) {
                  this.classList.add('active');
                    document.querySelector('#navbar').classList.remove('expander');
                    document.querySelector('#body-pd').classList.remove('body-pd');
                }
            } else {
              console.log('<<<<<<<<<<<<<<<<<<<<<');
                navLinks.forEach(link => link.classList.remove('active'));  

                this.classList.add('active');
                document.querySelector('#navbar').classList.add('expander');
                document.querySelector('#body-pd').classList.add('body-pd');
            }
        });
    });



// const navLinksIcon = document.querySelectorAll('.nav__link .nav__icon');

// navLinksIcon.forEach(navIcon => {

//   navIcon.addEventListener('click', function() {

//       console.log('icon click...');

//     // navLinksIcon.forEach(link => link.classList.remove('active'));

//     document.querySelector('#navbar').classList.toggle('expander');
//     document.querySelector('#body-pd').classList.toggle('body-pd');

    
//     navIcon.querySelector('.nav__link').classList.add('active')

//     });

// });



// const navLinks = document.querySelectorAll('.nav__link');

// navLinks.forEach(navLink => {

//     navLink.addEventListener('click', function() {

//     navLinks.forEach(link => link.classList.remove('active'));

//     this.classList.add('active');

//     document.querySelector('#navbar').classList.toggle('expander');

//     });

// });
 
 
const collapseLinks = document.querySelectorAll('.collapse__link');

collapseLinks.forEach(collapseLink => {

collapseLink.addEventListener('click', function() {
  console.log('testing collapse click');
  const navLink = this.closest('.nav__link');
  if (navLink) {
          const collapseMenu = navLink.querySelector('.collapse__menu');
      if (collapseMenu) {
          collapseMenu.classList.toggle('showCollapse');
      }
  }
    
    });

})