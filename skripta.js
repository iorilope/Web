function toggleMenu() {
    var menu = document.querySelector('.mainMenu');

    // Add class "show-menu" to display the menu
    if (!menu.classList.contains('show-menu')) {
        menu.classList.add('show-menu');
    } else {
        // Remove class "show-menu" to hide the menu
        menu.classList.remove('show-menu');
    }
}