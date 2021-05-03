<?php

/*
Template name: Услуги судовладельцам
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>

<section class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/services-background.png'); min-height: 335px;"></section>
<section class="py-5">
    <div class="container py-5">
        <? $services = CFS()->get('serv_loop'); ?>
        <? foreach ($services as $service) : ?>
        <div class="block mb-5">
            <h3 class="text-gold"><? echo $service['serv_header'] ?></h3>
            <hr style="border-top: 1px solid #C0B481">
            <? echo $service['serv_txt'] ?>
        </div>
        <? endforeach; ?>
    </div>
</section>


<?php get_footer(); ?>
