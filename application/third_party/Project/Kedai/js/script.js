// active
const navbarNav = document.querySelector('.navbar-nav');
// active click
document.querySelector('#ham-menu').onclick = () => {
    navbarNav.classList.toggle('active')
};

// active click remove
const hamMenu = document.querySelector('#ham-menu');

document.addEventListener('click', function(e) {
    if(!hamMenu.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
})