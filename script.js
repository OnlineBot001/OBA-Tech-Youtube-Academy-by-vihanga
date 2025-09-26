const navbarToggle = document.querySelector('.navbar-menu');
const navbarMenu = document.querySelector('.navbar-menu');

navbarToggle.addEventListener('click', () =>{
    navbarToggle.classList.toggle('active');
    navbarMenu.classList.toggle('active');
});