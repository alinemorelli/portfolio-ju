window.onload = function () {
    let button = document.getElementById('menu-mobile');
    button.addEventListener('click', function() {
        let menuMobile = document.getElementById('top-menu');
        console.log(menuMobile);
        menuMobile.classList.toggle('active');
        this.classList.toggle('close-menu');
    });
};

