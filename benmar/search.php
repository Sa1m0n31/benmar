<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package benmar
 */

get_header();
?>

    <main class="contact searchPage">
        <h2 class="contact__header" data-aos="zoom-in-up">
            Rezultaty wyszukiwania
        </h2>

        <main id="primary" class="site-main">

            <?php if ( have_posts() ) : ?>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;

                the_posts_navigation();

            else :

//                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </main>

<?php
get_footer();
?>
