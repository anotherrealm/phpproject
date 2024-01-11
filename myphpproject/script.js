
document.addEventListener('DOMContentLoaded', function () {
    const burgerIcon = document.querySelector('.burger_icon');
    const navLinks = document.querySelector('.nav_links');

    burgerIcon.addEventListener('click', function () {
        navLinks.classList.toggle('show');
    });
});
