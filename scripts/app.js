// Add link to pin icon for map
const pin = document.getElementById('pin');

showModal = e => {
   window.open('https://goo.gl/maps/zUUYNuKbPCVqK87H8');
}

pin.addEventListener('click', showModal)

// Navbar effects
const navbar = document.getElementById('navbar');
const hero = document.getElementById('hero');

window.onscroll = function() {
   if(hero && window.pageYOffset >= 400) {
      navbar.classList.remove('hide-nav');
   } else {
      navbar.classList.add('hide-nav');
   }
}