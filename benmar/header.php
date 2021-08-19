<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package benmar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container-fluid">
    <header class="header">
        <section class="header__section">
            <a class="link" href="<?php echo get_home_url(); ?>">
                <img class="header__logo" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo.png'; ?>" alt="benmar" />
            </a>

            <h4 class="header__description d-none d-lg-block">
                Producent siatki ogrodzeniowej i materiałów do pakowania <b>Golub-Dobrzyń, Rypin, Brodnica, Lipno</b>
            </h4>
        </section>
        <section class="header__section d-none d-md-flex">
            <section class="header__callToUs">
                <h5 class="header__callToUs__header">
                    Zadzwoń do nas
                </h5>

                <a class="button header__callToUs__btn" href="tel:+48123123123">
                    123 123 123
                    <span class="header__callToUs__btn__imgWrapper">
                    <img class="header__callToUs__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone.svg'; ?>" alt="telefon" />
                </span>
                </a>
            </section>

            <?php
                get_search_form();
            ?>

<!--            <form class="header__search">-->
<!--                <input class="header__input"-->
<!--                       placeholder="Wyszukiwanie..."-->
<!--                />-->
<!--                <button class="button header__searchSubmit">Szukaj</button>-->
<!--            </form>-->
        </section>
    </header>
    <menu class="menu">
        <section class="menuMobile d-flex d-md-none">
            <button class="menu__list__item">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="mobileMenuIcon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/home.png'; ?>" alt="home" />
                </a>
            </button>
            <button class="menu__list__item" onclick="toggleMobileMenu()">
                <img class="mobileMenuIcon mobileMenu--open" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.png'; ?>" alt="menu" />
                <img class="mobileMenuIcon mobileMenu--close" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.png'; ?>" alt="menu" />
            </button>
        </section>
        <ul class="menuMobile__dropdown d-md-none">
            <li class="menu__list__item">
                <a href="<?php echo get_home_url(); ?>">
                    Strona główna
                </a>
            </li>
            <li class="menu__list__item">
                <a href="./index.html">
                    Pakowanie
                </a>
            </li>
            <li class="menu__list__item">
                <a href="./index.html">
                    Artykuły biurowe
                </a>
            </li>
            <li class="menu__list__item">
                <a href="<?php echo get_home_url() . '#o-nas'; ?>">
                    O nas
                </a>
            </li>
            <li class="menu__list__item">
                <a href="./index.html">
                    Kontakt
                </a>
            </li>
        </ul>


        <!-- DESKTOP -->
        <ul class="menu__list d-none d-md-flex">
            <li class="menu__list__item">
                <a href="<?php echo get_home_url(); ?>">
                    Strona główna
                </a>
            </li>
            <li class="menu__list__item dropdownInvoke">
                <a href="./index.html">
                    Pakowanie
                </a>
                <img class="whiteArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/white-arrow.svg'; ?>" alt="wiecej" />
                <ul class="dropdownMenu">
                    <li class="dropdownMenu__item">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item afterNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item beforeNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item beforeNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item beforeNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item beforeNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                    <li class="dropdownMenu__item afterNot beforeNot">
                        <a href="#">
                            Folia stretch maszynowa
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__list__item">
                <a href="<?php echo get_page_link(get_page_by_title('Artykuły biurowe')->ID); ?>">
                    Artykuły biurowe
                </a>
            </li>
            <li class="menu__list__item">
                <a href="<?php echo get_home_url() . '#o-nas'; ?>">
                    O nas
                </a>
            </li>
            <li class="menu__list__item">
                <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                    Kontakt
                </a>
            </li>
        </ul>
    </menu>