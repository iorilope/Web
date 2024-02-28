function toggleMenu() {
    var menu = document.querySelector('.main-navbar .mainMenu');
    menu.classList.toggle('show');
  
    // Función para cerrar el menú al hacer clic en un enlace
    var links = document.querySelectorAll('.topnav a:not(.icon)');
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener('click', function() {
        menu.classList.remove('show');
      });
    }
  }