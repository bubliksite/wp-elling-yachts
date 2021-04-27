<?php 

/*
Template name: Главная страница
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

 ?>

<?php get_header(); ?>

<section class="main">
    <div class="container d-flex justify-content-start align-items-end h-100 pb-5">
        <h1 class="font-weight-bold pb-5">
            ELLING YACHT <span class="text-gold">E6</span> <br>
            МОЩНОСТЬ И ЭЛЕГАНТНОСТЬ

        </h1>
    </div>
</section>

<?php

$posts = [258, 256, 152]

?>

<section class="yachts py-5">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase">
            Наши яхты
        </h1>
        <p class="lead my-5">Модельный ряд верфи Elling Yachts</p>
        <div class="yachts_loop">
            <div class="row">
            <?php
                foreach ($posts as $post) { ?>
                    <div class="col-lg-4 mb-4">
                        <? $yacht = get_post($post); ?>
                    <img src="<?php echo CFS()->get('yachts_image', $post); ?>" alt="" style="width: 100%;object-fit: cover;max-height: 200px">
                        <h5 class="text-gold py-2">
                            <? echo 'ELLING ' . $yacht->post_title ?>
                        </h5>
                        <div class="yachts_short-info d-flex justify-content-between">
                            <p>Общая длина</p>
                            <p><? echo CFS()->get('yachts_height', $post); ?> м</p>
                        </div>
                        <div class="yachts_short-info d-flex justify-content-between">
                            <p>Общая ширина</p>
                            <p><? echo CFS()->get('yachts_width', $post); ?> м</p>
                        </div>
                        <h5 class="text-gold text-uppercase pt-2"><? echo CFS()->get('yachts_tagline', $post); ?></h5>
                        <a href="<? echo get_post_permalink($post) ?>" class="btn btn-gold mt-3 d-flex justify-content-between align-items-center">
                            <span>Ваш elling <? echo $yacht->post_title ?> </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                        </a>
                </div>
             <?php   }
            ?>


            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>