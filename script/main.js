window.onload = function () {
    let button = document.getElementById('menu-mobile');
    button.addEventListener('click', function() {
        let menuMobile = document.getElementById('top-menu');
        console.log(menuMobile);
        menuMobile.classList.toggle('active');
        this.classList.toggle('close-menu');
    });
};

window.onscroll = function () {
    let header = document.querySelector('header');
    if (document.documentElement.scrollTop > 5) {

        header.style.height = "60px";
    } else {
        header.style.height = "90px";
    }
}
