   $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,  
        navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
        autoplay: true,
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });
});
    

