<?php
get_header();
?>

<main class="page">
    <h1 class="page__header">
        <?php echo the_title(); ?>
    </h1>

    <main class="page__content">
        <img class="page__offer__img" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo the_title(); ?>" />

        <article class="page__content__text">
            <?php the_content(); ?>
        </article>
    </main>
</main>

<?php
get_footer();
?>
