<?php
get_header();
?>

    <main class="page">
        <h1 class="page__header">
            <?php echo the_title(); ?>
        </h1>

        <?php
            if(get_field('opis')) {
                ?>
                <section class="page__section">
                    <figure class="page__mainImgWrapper">
                        <img class="page__mainImg" src="<?php echo get_field('zdjecie_glowne'); ?>" alt="<?php echo the_title(); ?>" />
                    </figure>
                    <article class="page__desc">
                        <?php
                        echo get_field('opis');
                        ?>
                    </article>
                </section>

                <section class="page__section aboutProduct">
                    <section class="page__section__section">
                        <h3 class="page__section__section__header">
                            Parametry produktu
                        </h3>
                        <section class="product__info">
                            <?php
                            if(get_field('klucz_1')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_1'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_1'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            if(get_field('klucz_2')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_2'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_2'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            if(get_field('klucz_3')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_3'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_3'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            if(get_field('klucz_4')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_4'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_4'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            if(get_field('klucz_5')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_5'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_5'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                            <?php
                            if(get_field('klucz_6')) {
                                ?>
                                <section class="product__info__item">
                                <span class="product__info__item__key">
                                    <?php echo get_field('klucz_6'); ?>
                                </span>
                                    <span class="product__info__item__value">
                                    <?php echo get_field('wartosc_6'); ?>
                                </span>
                                </section>
                                <?php
                            }
                            ?>
                        </section>
                    </section>

                    <section class="page__section__section page__section__galleryWrapper">
                        <h3 class="page__section__section__header">
                            Zdjęcia poglądowe
                        </h3>
                        <section class="page__section__gallery">
                            <?php the_content(); ?>
                        </section>
                    </section>
                </section>

                    <?php
            }
            else {
                ?>
                    <main class="page__text">
                        <?php the_content(); ?>
                    </main>

                    <?php
            }
        ?>
    </main>
    <section class="contact">
        <h2 class="contact__header">
            <span class="red">Skontaktuj się</span> z nami!
        </h2>

        <main class="contact__main">
            <section class="contact__map">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </section>
            <section class="contact__data">
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