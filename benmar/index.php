<?php
get_header();
?>

    <section class="carousel">
        <button class="button carousel__btn carousel__btn--prev" onclick="prevSlide()">
            <img class="carousel__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/right-arrow.png'; ?>" alt="poprzedni" />
        </button>
        <header class="carousel__siema">
            <section class="carousel__item">
                <img class="carousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/folia-stretch.png'; ?>" alt="benmar-ogrodzenia" />
            </section>
            <section class="carousel__item">
                <img class="carousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/folia-stretch.png'; ?>" alt="benmar-ogrodzenia" />
            </section>
            <section class="carousel__item">
                <img class="carousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/folia-stretch.png'; ?>" alt="benmar-ogrodzenia" />
            </section>
        </header>
        <button class="button carousel__btn carousel__btn--next" onclick="nextSlide()">
            <img class="carousel__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/right-arrow.png'; ?>" alt="nastepny" />
        </button>
    </section>

    <main class="mainSection" data-aos="fade-in">
        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/folia-stretch.svg'; ?>" alt="folia-stretch-brodnica" />
            </figure>
            <h3 class="mainSection__item__header">
                Folia stretch
            </h3>
            <p class="mainSection__item__desc">
                Produkujemy folię stretch maszynową i ręczną. Folia stretch dostępna jest na rolkach tradycyjnych oraz powiększonych Jumbo.
            </p>
            <a class="button link mainSection__item__btn">
                Szczegóły
            </a>
        </section>

        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/package.svg'; ?>" alt="folia-stretch-brodnica" />
            </figure>
            <h3 class="mainSection__item__header">
                Worki i pakowanie
            </h3>
            <p class="mainSection__item__desc">
                W ofercie materiałów do pakowania posiadamy worki i siatki do węgla, warzyw. Produkujemy worki polietylenowe z nadrukiem.
            </p>
            <a class="button link mainSection__item__btn">
                Szczegóły
            </a>
        </section>

        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/supplies.svg'; ?>" alt="artykuly-biurowe" />
            </figure>
            <h3 class="mainSection__item__header">
                Artykuły biurowe
            </h3>
            <p class="mainSection__item__desc">
                Posiadamy szeroką gamę artykułow biurowych, od papieru, przez etykiety, oznaczenia, galanterię biurową, aż po elementy potrzebne do obsługi i prezentacji wizualnej konferencji.
            </p>
            <a class="button link mainSection__item__btn">
                Szczegóły
            </a>
        </section>
    </main>

    <section class="aboutUs" id="o-nas">
        <h2 class="aboutUs__header" data-aos="fade-up">
            Dlaczego <span class="aboutUs__header--red">benmar</span>?
        </h2>
        <h3 class="aboutUs__subheader" data-aos="fade-up">
            Wybierając nasze produkty wybierasz przede wszystkim <b>jakość i najwyższy poziom obsługi</b>.
        </h3>

        <section class="aboutUs__section">
            <h4 class="aboutUs__section__header" data-aos="fade-right">
                Stawiamy na jakość
            </h4>
            <p class="aboutUs__section__text"  data-aos="fade-right">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            </p>

            <section class="aboutUs__section__icons">
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/box.svg'; ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        Produkty najwyższej jakości
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/box.svg'; ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        Produkty najwyższej jakości
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/box.svg'; ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        Produkty najwyższej jakości
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/box.svg'; ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        Produkty najwyższej jakości
                    </h5>
                </a>
            </section>
        </section>

        <section class="aboutUs__section">
            <h4 class="aboutUs__section__header" data-aos="fade-right">
                Terminowość i sumienność
            </h4>
            <p class="aboutUs__section__text" data-aos="fade-right">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            </p>
            <section class="aboutUs__section__images" data-aos="zoom-in-up">
            </section>
        </section>

        <section class="aboutUs__section aboutUs__section--offer">
            <figure class="aboutUs__section__offer__imgWrapper" data-aos="fade-right">
                <img class="aboutUs__section__offer__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing.png'; ?>" alt="benmar" />
            </figure>

            <main class="aboutUs__section__offer__content" data-aos="fade-left">
                <h2 class="aboutUs__section__offer__content__header">
                    Folia stretch od polskiego producenta
                </h2>
                <article class="aboutUs__section__offer__content__text">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                    <p>
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                    </p>
                </article>
                <a class="button aboutUs__section__offer__content__btn">
                    Szczegóły oferty
                </a>
            </main>
        </section>
        <section class="aboutUs__section aboutUs__section--offer">
            <main class="aboutUs__section__offer__content" data-aos="fade-right">
                <h2 class="aboutUs__section__offer__content__header">
                    Folia stretch od polskiego producenta
                </h2>
                <article class="aboutUs__section__offer__content__text">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                    <p>
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                    </p>
                </article>
                <a class="button aboutUs__section__offer__content__btn">
                    Szczegóły oferty
                </a>
            </main>
            <figure class="aboutUs__section__offer__imgWrapper" data-aos="fade-left">
                <img class="aboutUs__section__offer__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/landing.png'; ?>" alt="benmar" />
            </figure>
        </section>
    </section>

    <section class="contact">
        <h2 class="contact__header" data-aos="zoom-in-up">
            <span class="red">Skontaktuj się</span> z nami!
        </h2>

        <main class="contact__main">
            <section class="contact__map" data-aos="fade-right">

            </section>
            <section class="contact__data" data-aos="fade-left">
                <h3 class="contact__data__header">
                    Informacje o firmie
                </h3>
                <address class="contact__data__address">
                    Benmar Mariusz Szefler<br/>
                    Białkowo 39A<br/>
                    87-400 Golub-Dobrzyń<br/>
                    NIP: 878 155 56 64<br/>
                </address>

                <h3 class="contact__data__header">
                    Dane kontaktowe
                </h3>
                <section class="contact__data__address">
                    <h3 class="contact__data__contact">
                        <img class="contact__data__contact__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone-1.svg'; ?>" alt="telefon" />
                        <a class="link" href="tel:+48600179174">
                            600 179 174
                        </a>
                    </h3>
                    <h3 class="contact__data__contact">
                        <img class="contact__data__contact__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail.svg'; ?>" alt="email" />
                        <a class="link" href="mailto:szymon.burak0031@gmail.com">
                            szymon.burak0031@gmail.com
                        </a>
                    </h3>
                </section>

                <h3 class="contact__data__header">
                    Sprzedaż artykułów biurowych w punkcie
                </h3>
                <address class="contact__data__address">
                    Sklep<br/>
                    ul. H. Sienkiewicza 3<br/>
                    87-400 Golub-Dobrzyń<br/>
                    tel. 731 731 202<br/>
                </address>

                <section class="contact__data__buttons">
                    <a class="button button--contact">
                        Zadzwoń
                    </a>
                    <a class="button button--contact">
                        Napisz
                    </a>
                </section>
            </section>
        </main>
    </section>

<?php
get_footer();
?>