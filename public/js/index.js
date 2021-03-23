let hamburger = document.getElementById('hamburgerbtn');

    let mobileMenu = document.getElementById('mobileMenu');
    let loginMenu = document.getElementById("loginMenu");
    hamburger.addEventListener('click', function(){
        mobileMenu.classList.toggle('active');
        loginMenu.classList.toggle('active');
    });