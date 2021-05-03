<?php

/*
Template name: О компании
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
        <div class="row">
            <div class="col-lg-3 mb-4">
                <img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/Logo_3.svg" alt="">
            </div>
            <div class="col-lg-9 font-open-sans">
                <div class="font-open-sans">
                    <? echo CFS()->get('about_txt') ?>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
