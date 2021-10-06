<?php
get_header();
?>

    <section class="carousel">
        <button class="button carousel__btn carousel__btn--prev" onclick="prevSlide()">
            <img class="carousel__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/right-arrow.png'; ?>" alt="poprzedni" />
        </button>
        <header class="carousel__siema">
            <?php
                $args = array(
                        'post_type' => 'baner'
                );

                $query = new WP_Query($args);

                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        ?>

                        <section class="carousel__item">
                            <img class="carousel__img" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo the_title(); ?>" />

                            <main class="carousel__item__content">
                                <h1 class="carousel__item__header">
                                    Z nami osiągniesz
                                </h1>
                                <h2 class="carousel__item__subheader">
                                    Więcej
                                </h2>
                            </main>
                        </section>

                            <?php
                    }
                }
            ?>
        </header>
        <button class="button carousel__btn carousel__btn--next" onclick="nextSlide()">
            <img class="carousel__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/right-arrow.png'; ?>" alt="nastepny" />
        </button>
    </section>

    <main class="mainSection" data-aos="fade-in">
        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_field('czarne_tlo_-_ikonka_1', 18); ?>" alt="folia-stretch-brodnica" />
            </figure>
            <h3 class="mainSection__item__header">
                <?php echo get_field('czarne_tlo_-_tytul_1', 18); ?>
            </h3>
            <p class="mainSection__item__desc">
                <?php echo get_field('czarne_tlo_-_tekst_1', 18); ?>
            </p>
            <a class="button link mainSection__item__btn" href="<?php echo get_field('czarne_tlo_-_link_1', 18); ?>">
                Szczegóły
            </a>
        </section>

        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_field('czarne_tlo_-_ikonka_2', 18); ?>" alt="folia-stretch-brodnica" />
            </figure>
            <h3 class="mainSection__item__header">
                <?php echo get_field('czarne_tlo_-_tytul_2', 18); ?>
            </h3>
            <p class="mainSection__item__desc">
                <?php echo get_field('czarne_tlo_-_tekst_2', 18); ?>
            </p>
            <a class="button link mainSection__item__btn" href="<?php echo get_field('czarne_tlo_-_link_2', 18); ?>">
                Szczegóły
            </a>
        </section>

        <section class="mainSection__item">
            <figure class="mainSection__item__imgWrapper">
                <img class="mainSection__item__img" src="<?php echo get_field('czarne_tlo_-_ikonka_2', 18); ?>" alt="artykuly-biurowe" />
            </figure>
            <h3 class="mainSection__item__header">
                <?php echo get_field('czarne_tlo_-_tytul_3', 18); ?>
            </h3>
            <p class="mainSection__item__desc">
                <?php echo get_field('czarne_tlo_-_tekst_3', 18); ?>
            </p>
            <a class="button link mainSection__item__btn" href="<?php echo get_field('czarne_tlo_-_link_3', 18); ?>">
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
                <?php echo get_field('naglowek_1', 18); ?>
            </h4>
            <p class="aboutUs__section__text"  data-aos="fade-right">
                <?php echo get_field('tekst_1', 18); ?>
            </p>

            <section class="aboutUs__section__icons">
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in" href="<?php echo get_field('link_do_ikonki_1', 18); ?>">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_field('ikonka_1', 18); ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        <?php echo get_field('tekst_do_ikonki_1', 18); ?>
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in" href="<?php echo get_field('link_do_ikonki_1', 18); ?>">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_field('ikonka_2', 18); ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        <?php echo get_field('tekst_do_ikonki_2', 18); ?>
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in" href="<?php echo get_field('link_do_ikonki_1', 18); ?>">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_field('ikonka_3', 18); ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        <?php echo get_field('tekst_do_ikonki_3', 18); ?>
                    </h5>
                </a>
                <a class="link aboutUs__section__icons__item" data-aos="zoom-in" href="<?php echo get_field('link_do_ikonki_1', 18); ?>">
                    <img class="aboutUs__section__icons__item__img" src="<?php echo get_field('ikonka_4', 18); ?>" alt="siatka-ogrodzeniowa-golub-dobrzyn" />
                    <h5 class="aboutUs__section__icons__item__header">
                        <?php echo get_field('tekst_do_ikonki_4', 18); ?>
                    </h5>
                </a>
            </section>
        </section>

        <section class="aboutUs__section">
            <h4 class="aboutUs__section__header" data-aos="fade-right">
                <?php echo get_field('naglowek_2', 18); ?>
            </h4>
            <p class="aboutUs__section__text" data-aos="fade-right">
                <?php echo get_field('tekst_2', 18); ?>
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
                        Oferujemy wysokiej jakości folię stretch, maszynową, jumbo oraz ręczną.
                    </p>
                    <p>
                        Dołącz do szerokiego grona Klientów zadowolonych z naszych usług.
                    </p>
                </article>
                <a class="button aboutUs__section__offer__content__btn" href="<?php echo get_page_link(get_page_by_title('Folie stretch')->ID); ?>">
                    Szczegóły oferty
                </a>
            </main>
        </section>
        <section class="aboutUs__section aboutUs__section--offer">
            <main class="aboutUs__section__offer__content" data-aos="fade-right">
                <h2 class="aboutUs__section__offer__content__header">
                    Opakowania przemysłowe
                </h2>
                <article class="aboutUs__section__offer__content__text">
                    <p>
                        Jesteśmy jednym z największych w regionie dystrybutorów opakowań przemysłowych.
                    </p>
                    <p>
                        W naszej ofercie posiadamy szeroką gamę takich produktów jak taśmy, worki, półrękawy, rękawy, kaptury paletowe czy folie termokurczliwe LDPM, HDPM, MDPM.
                    </p>
                </article>
                <a class="button aboutUs__section__offer__content__btn" href="<?php echo get_page_link(get_page_by_title('Opakowania przemysłowe')->ID); ?>">
                    Szczegóły oferty
                </a>
            </main>
            <figure class="aboutUs__section__offer__imgWrapper" data-aos="fade-left">
                <img class="aboutUs__section__offer__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/rekawy.png'; ?>" alt="benmar" />
            </figure>
        </section>
    </section>

    <section class="contact">
        <h2 class="contact__header" data-aos="zoom-in-up">
            <span class="red">Skontaktuj się</span> z nami!
        </h2>

        <main class="contact__main">
            <section class="contact__map" data-aos="fade-right">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
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
                        <a class="link" href="tel:+48785182282">
                            785 182 282
                        </a>
                    </h3>
                    <h3 class="contact__data__contact">
                        <img class="contact__data__contact__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail.svg'; ?>" alt="email" />
                        <a class="link" href="mailto:biurobenmar@interia.pl">
                            biurobenmar@interia.pl
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
                    <a class="button button--contact" href="tel:+48785182282">
                        Zadzwoń
                    </a>
                    <a class="button button--contact" href="mailto:biurobenmar@interia.pl">
                        Napisz
                    </a>
                </section>
            </section>
        </main>
    </section>

<?php
get_footer();
?>