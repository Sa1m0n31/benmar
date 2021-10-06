<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package benmar
 */

?>

</div>
<footer class="footer">
    <div class="footer__main">
        <section class="footer__col">
            <h4 class="footer__header">
                Dane firmy
            </h4>
            <p class="footer__content">
                Benmar Mariusz Szefler<br/>
                Białkowo 39A<br/>
                87-400 Golub-Dobrzyń<br/>
                NIP: 878 155 56 64
            </p>
        </section>
        <section class="footer__col">
            <h4 class="footer__header">
                Kontakt
            </h4>
            <p class="footer__content">
                Dział handlowy<br/>
                tel. 785 182 282<br/>
                biurobenmar@interia.pl<br/>
                tel. 731 731 201<br/>
                tel. 607 042 741
            </p>
        </section>
        <section class="footer__col">
            <h4 class="footer__header">
                Sprzedaż artykułów biurowych
            </h4>
            <p class="footer__content">
                ul. H. Sienkiewicza 3<br/>
                87-400 Golub-Dobrzyń<br/>
                tel. 731 731 202
            </p>
        </section>
        <section class="footer__col">
            <h4 class="footer__header">
                Przydatne linki
            </h4>
            <ul class="footer__content">
                <li><a href="<?php echo get_page_link(get_page_by_title('Worki do pakowania peletu Brodnica')->ID); ?>">Worki do pakowania peletu Brodnica</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Worki do pakowania peletu Golub-Dobrzyń')->ID); ?>">Worki do pakowania peletu Golub-Dobrzyń</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Worki do pakowania peletu Rypin')->ID); ?>">Worki do pakowania peletu Rypin</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Worki do ekogroszku Golub-Dobrzyń')->ID); ?>">Worki do ekogroszku Golub-Dobrzyń</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Worki do ekogroszku Brodnica')->ID); ?>">Worki do ekogroszku Brodnica</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Koperty kurierskie Golub-Dobrzyń')->ID); ?>">Koperty kurierskie Golub-Dobrzyń</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Koperty kurierskie Brodnica')->ID); ?>">Koperty kurierskie Brodnica</a></li>
            </ul>
        </section>
    </div>
    <aside class="footer__bottom">
        <h6 class="footer__bottom__header">
            Projekt i wykonanie: <a class="link" href="https://skylo.pl" rel="noreferrer"><b>skylo.pl</b></a>
        </h6>
    </aside>
</footer>

<?php wp_footer(); ?>

</body>
</html>
