<?php
get_header();
?>

    <main class="page">
        <h1 class="page__header">
            <?php echo the_title(); ?>
        </h1>

        <section class="page__section">
            <img class="page__mainImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/example.png'; ?>" alt="<?php echo the_title(); ?>" />
            <article class="page__desc">
                <p>
                    Oferujemy wysokiej jakości folię spożywczą do owijania produktów spożywczych. Nasza folia wyróżnia się wysokim stopień przezroczystości, wysoką wytrzymałością mechaniczną, optymalną rozciągliwością, ponadto jest bardzo odporna na rozdarcie. Produkowana zgodnie z dyrektywami Unii Europejskiej dotyczącymi pakowania żywności, wytyczne te zostały określone przed departament bezpieczeństwa żywności i żywienia.
                </p>
                <p>
                    Folia spożywcza jest szeroko wykorzystywana w przemyśle spożywczym, ale również w gospodarstwie domowym. Folia tego typu idealnie nadaje się do owijania wszelkiego rodzaju produktów spożywczych na tackach, na gorący stół, na odcinaczach itd. Przykładowymi produktami, które można pakować przy użyciu folii spożywczej jest mięso, ryby, wędliny, drób, grzyby, pieczywo, warzywa, owoce i wiele innych.
                </p>
                <p>
                    Gwarantujemy, że przy użyciu naszej folii spożywczej, Państwa produkt będzie przechowywany w najlepszy możliwy sposób, co jednocześnie zabezpieczy go przed niekorzystnymi czynnikami zewnętrznymi, przedłużając jednocześnie datę ważności produktu spożywczego. Proponujemy folię w różnych grubościach i szerokościach, jesteśmy w stanie wyprodukować folię dopasowaną do indywidualnych oczekiwań klienta. Nasza folia spożywcza to nie tylko dłuższy okres przechowywania produktów spożywczych, to także redukcja kosztów pakowania, większa atrakcyjność wizualna wyrobu oraz co najważniejsze – nasza folia spożywcza pozbawiona jest substancji, które mogłyby wpływać na naturalny zapach i smak przechowywanej żywności.
                </p>
                </p>
            </article>
        </section>

        <section class="page__section aboutProduct">
            <section class="page__section__section">
                <h3 class="page__section__section__header">
                    Parametry produktu
                </h3>
                <section class="product__info">
                    <section class="product__info__item">
                        <span class="product__info__item__key">
                            Nazwa
                        </span>
                        <span class="product__info__item__value">
                            Folia spożywcza
                        </span>
                    </section>
                    <section class="product__info__item">
                        <span class="product__info__item__key">
                            Nazwa
                        </span>
                        <span class="product__info__item__value">
                            Folia spożywcza
                        </span>
                    </section>
                    <section class="product__info__item">
                        <span class="product__info__item__key">
                            Nazwa
                        </span>
                        <span class="product__info__item__value">
                            Folia spożywcza
                        </span>
                    </section>
                    <section class="product__info__item">
                        <span class="product__info__item__key">
                            Nazwa
                        </span>
                        <span class="product__info__item__value">
                            Folia spożywcza
                        </span>
                    </section>
                    <section class="product__info__item">
                        <span class="product__info__item__key">
                            Nazwa
                        </span>
                        <span class="product__info__item__value">
                            Folia spożywcza
                        </span>
                    </section>
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