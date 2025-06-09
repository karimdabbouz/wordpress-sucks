document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.dbx-navbar-burger');
    const menu = document.querySelector('.dbx-navbar-menu');
    if (burger && menu) {
        burger.addEventListener('click', function() {
            menu.classList.toggle('active');
            burger.classList.toggle('open');
        });
    }
}); 