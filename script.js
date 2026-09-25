document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const mobileNav = document.getElementById('mobile-nav');
    
    // Toggle mobile navigation on burger menu click
    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.toggle('active');
        mobileNav.classList.toggle('open');
        
        // Prevent scrolling when menu is open
        if (mobileNav.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    // Close mobile navigation when a menu item is clicked
    const mobileMenuItems = mobileNav.querySelectorAll('.menu-item');
    mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            burgerMenu.classList.remove('active');
            mobileNav.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
});
