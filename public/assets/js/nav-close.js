const navClose = () => {

  const width = window.outerWidth;

  if (width < 800) {

    const navbar = document.querySelector('.nav-mob');
    const burger = document.querySelector('.burger');
    const navItems = document.querySelectorAll(".nav-item");
    const mainNav = document.querySelector(".main-nav");

    navItems.forEach(item => {
      item.addEventListener('click', (e) => {
        
        mainNav.classList.toggle('show-nav');
        navbar.classList.toggle('show-nav');
        
      })
    })
    
  }
}

navClose();