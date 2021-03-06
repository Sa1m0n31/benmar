<?php
get_header();
?>

    <main class="contact">
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
    </main>


<?php
get_footer();
?>