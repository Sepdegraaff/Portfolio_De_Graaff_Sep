const hamburgerBtn = document.getElementById('hamburger-btn');
const mobileMenu = document.getElementById('mobile-menu');
const body = document.querySelector('body');

hamburgerBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('translate-x-[-100%]');
    mobileMenu.classList.toggle('translate-x-[0]');

    hamburgerBtn.classList.toggle('open');

    body.classList.toggle('overflow-hidden');
});

window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        mobileMenu.classList.add('translate-x-[-100%]');
        mobileMenu.classList.remove('translate-x-[0]');
        hamburgerBtn.classList.remove('open');
        body.classList.remove('overflow-hidden');
    }
});
