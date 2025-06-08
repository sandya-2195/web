const navE1 = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 56) {
        navE1.classList.add('navbar-scrolled'); // Se agrega el color al hacer scroll
    } else {
        navE1.classList.remove('navbar-scrolled'); // Se mantiene transparente al inicio
    }
});


