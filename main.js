const menu_gumb = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mob-nav');

menu_gumb.addEventListener('click', () => {
    menu_gumb.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
});


