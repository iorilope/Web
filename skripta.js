function toggleMenu() {
    var menu = document.querySelector('.mainMenu');
    menu.classList.toggle('show-menu');
}

document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.querySelector('.menu-btn-3');
    var mainMenu = document.querySelector('.mainMenu');

    menuBtn.addEventListener('click', function() {
        mainMenu.classList.toggle('show-menu');
    });
});