/* Hero carousel */
let heroCarousel;
const heroCarouselElement = document.querySelector(".carousel__siema");
if(heroCarouselElement) {
    heroCarousel = new Siema({
        selector: ".carousel__siema",
        perPage: 1,
        draggable: false,
        loop: true
    });
}

const nextSlide = () => {
    heroCarousel.next();
}

const prevSlide = () => {
    heroCarousel.prev();
}
