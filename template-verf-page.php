<?php

/*
Template name: О верфи
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>

<section class="py-5">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase mb-5"><? echo the_title() ?></h1>
        <div class="font-open-sans">
            <? echo CFS()->get('about_txt') ?>
        </div>

    </div>
</section>


<?php get_footer(); ?>
