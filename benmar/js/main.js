/* AOS */
AOS.init();

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

/* Mobile menu */
const mobileMenu = document.querySelector(".menuMobile__dropdown");
const mobileMenuCloseIcon = document.querySelector(".mobileMenu--close");
const mobileMenuHamburgerIcon = document.querySelector(".mobileMenu--open");
const toggleMobileMenu = () => {
    if(window.getComputedStyle(mobileMenu).getPropertyValue("display") === "none") {
        /* Open menu */
        mobileMenu.style.display = "flex";
        mobileMenuCloseIcon.style.display = "block";
        mobileMenuHamburgerIcon.style.display = "none";
    }
    else {
        /* Close menu */
        mobileMenu.style.display = "none";
        mobileMenuCloseIcon.style.display = "none";
        mobileMenuHamburgerIcon.style.display = "block";
    }
}
