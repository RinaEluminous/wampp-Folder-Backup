   
    // const navLinks = document.querySelectorAll('.nav__link');

    // navLinks.forEach(navLink => {
      
    //     navLink.addEventListener('click', function(event) {
    //       console.log('testing nav link');
           
    //         if (this.classList.contains('active') && (event.target.classList.contains('nav__icon') || event.target.classList.contains('nav__name'))) {
    //           console.log('nav link is activ ');
    //             if (this === event.target.closest('.nav__link')) {
    //               this.classList.add('active');
    //                 document.querySelector('#navbar').classList.remove('expander');
    //                 document.querySelector('#body-pd').classList.remove('body-pd');
    //             }
    //         } else {
    //           console.log('on click of nav icon');
    //             navLinks.forEach(link => link.classList.remove('active'));  

    //             this.classList.add('active');
    //             document.querySelector('#navbar').classList.add('expander');
    //             document.querySelector('#body-pd').classList.add('body-pd');
    //         }
    //     });
    // });

    const navLinks = document.querySelectorAll('.nav__link');

    navLinks.forEach(navLink => {
        navLink.addEventListener('click', function(event) {
            // console.log('Clicked on nav link:', this);
            console.log('Clicked on nav link:');
            if (this.classList.contains('active') && 
                (event.target.classList.contains('nav__icon') || event.target.classList.contains('nav__name'))) {
                console.log('Nav link is active and clicked on icon or name');
    
                if (this === event.target.closest('.nav__link')) {
                    console.log('Closest nav link is the same as the clicked nav link');
                    this.classList.add('active');
                    document.querySelector('#navbar').classList.remove('expander');
                    document.querySelector('#body-pd').classList.remove('body-pd');
                    console.log('Removed expander and body-pd classes');
                    
                }
            } else {
                console.log('Nav link is not active or clicked on other parts of nav link');
                navLinks.forEach(link => { 
                    link.classList.remove('active');
                    //console.log('Removed active class from link:', link);
                    console.log('Removed active class from link:');
                });
    
                this.classList.add('active');
                document.querySelector('#navbar').classList.add('expander');
                document.querySelector('#body-pd').classList.add('body-pd');
                console.log('Added active, expander, and body-pd classes');
            }
        });
    });
    
const navLinksIcon = document.querySelectorAll('.nav__link .nav__icon');

navLinksIcon.forEach(navIcon => {

  navIcon.addEventListener('click', function() {

     

    });

});


const collapseLinks = document.querySelectorAll('.collapse__link');

collapseLinks.forEach(collapseLink => {

collapseLink.addEventListener('click', function() {
  console.log('collapse click >>>>>>>>>>');
  const navLink = this.closest('.nav__link');
  if (navLink) {
          const collapseMenu = navLink.querySelector('.collapse__menu');
      if (collapseMenu) {
          collapseMenu.classList.toggle('showCollapse');
      }
  }
    
    });

})



 