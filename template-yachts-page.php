<?php

/*
Template name: Страница яхт
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>
<section class="main-info container-fluid"
         style="background-image: url('<? echo CFS()->get('yachts_main_image') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex justify-content-end align-items-end h-100 container">
                    <div class="row align-items-center p-3">
                        <h4 class="text-gold font-weight-normal col-md-3 mb-2"><span class="text-white">Elling</span> <? echo the_title();?></h4>
                        <div class="col-md-3 mb-2">
                            <a href="#gallery" class="btn btn-gold text-uppercase d-flex align-items-center">
                                <span class="w-100">Фото</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="/zaprosit-stoimost?id=<? echo the_id() ?>" class="btn btn-gold text-uppercase pt-2 d-flex align-items-center">
                                <span class="mr-2">Запросить цену </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: #f5f5f5">
                <div class=" pl-3 d-flex justify-content-start align-items-end pt-5">
                    <div class="w-100">
                        <div class="blue-linear-bg py-4 px-5 mb-3">
                            <h2 class="text-white text-uppercase mb-3">
                                Главная информация
                            </h2>
                            <div class="row" style="font-size: 14px">
                                <div class="col-lg-3 col-md-4 col-4 text-gold">
                                    <p>Модель</p>
                                </div>
                                <div class="col-lg-9 col-md-8 col-8 text-white">
                                    <p><? echo the_title();?></p>
                                </div>
                                <div class="col-lg-3 col-md-4 col-4 text-gold">
                                    <p>Стоимость</p>
                                </div>
                                <div class="col-lg-9 col-md-8 col-8 text-white">
                                    <?echo CFS()->get('yachts_cost')?>
                                </div>
                                <div class="col-lg-3 col-md-4 col-4 text-gold">
                                    <p>Размеры</p>
                                </div>
                                <div class="col-lg-9 col-md-8 col-8 text-white">
                                    <?echo CFS()->get('yachts_sizes')?>
                                </div>
                                <div class="col-lg-3 col-md-4 col-4 text-gold">
                                    <p>Корпус</p>
                                </div>
                                <div class="col-lg-9 col-md-8 col-8 text-white">
                                    <?echo CFS()->get('yachts_corpus')?>
                                </div>
                                <div class="col-lg-3 col-md-4 col-4 text-gold">
                                    <p>Двигатель</p>
                                </div>
                                <div class="col-lg-9 col-md-8 col-8 text-white">
                                    <?echo CFS()->get('yachts_engine')?>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white py-4 px-5">
                            <h2 class="text-gold text-uppercase mb-3">
                                План этажей <?echo the_title();?>
                            </h2>
                            <img style="max-width: 100%" src="<?echo CFS()->get('yachts_etages')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="yachts_description my-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <img class="mb-5" style="width: 70%" src="<? echo CFS()->get('yachts_photo1') ?>" alt="">
                <img class="mt-2" style="width: 100%; object-fit: cover; max-height: 300px;" src="<? echo CFS()->get('yachts_photo2') ?>" alt="">
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="text-gold text-uppercase"><? echo CFS()->get('yachts_headline') ?></h3>
                <p>
                    <? echo CFS()->get('yachts_description') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section
        class="image parallax-window"
        data-parallax="scroll"
        data-image-src="<?php echo CFS()->get('yachts_background_image') ?>">
</section>
<section class="yacht_info my-5">
    <div class="container my-5">
        <h1 class="text-gold text-center">
            ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="blue-linear-bg mt-4">
                    <h3 class="text-white font-weight-normal py-4 px-5">
                        ОБЩАЯ ИНФОРМАЦИЯ
                    </h3>
                    <div class="row pb-4 px-5" style="font-size: 14px">
                        <? foreach (CFS()->get('_loop_block_main_info') as $item) : ?>
                        <div class="col-sm-6 col-12 text-gold">
                            <p><? echo $item['main_info_key'] ?></p>
                        </div>
                        <div class="col-sm-6 col-12 text-white">
                            <p><? echo $item['main_info_value'] ?></p>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="blue-linear-bg mt-4">
                    <h3 class="text-white font-weight-normal py-4 px-5">
                        РАЗМЕЩЕНИЕ
                    </h3>
                    <div class="row pb-4 px-5" style="font-size: 14px">
                        <? foreach (CFS()->get('_loop_block_host') as $item) : ?>
                            <div class="col-sm-6 col-12 text-gold">
                                <p><? echo $item['host_key'] ?></p>
                            </div>
                            <div class="col-sm-6 col-12 text-white">
                                <p><? echo $item['host_value'] ?></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blue-linear-bg mt-4">
                    <h3 class="text-white font-weight-normal py-4 px-5">
                        ДВИГАТЕЛИ, ЭЛЕКТРИКА
                    </h3>
                    <div class="row pb-4 px-5" style="font-size: 14px">
                        <? foreach (CFS()->get('_loop_block_engine_electicity') as $item) : ?>
                            <div class="col-sm-6 col-12 text-gold">
                                <p><? echo $item['engine_electicity_key'] ?></p>
                            </div>
                            <div class="col-sm-6 col-12 text-white">
                                <p><? echo $item['engine_electicity_value'] ?></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <? if (CFS()->get('_loop_block_oborudovanie')) : ?>
                <div class="blue-linear-bg mt-4">
                    <h3 class="text-white font-weight-normal py-4 px-5">
                        ПАЛУБНОЕ ОБОРУДОВАНИЕ
                    </h3>
                    <? CFS()->get('_loop_block_oborudovanie') ?>
                    <div class="row pb-4 px-5" style="font-size: 14px">
                        <? foreach (CFS()->get('_loop_block_oborudovanie') as $item) : ?>
                            <div class="col-sm-6 col-12 text-gold">
                                <p><? echo $item['oborudovanie_key'] ?></p>
                            </div>
                            <div class="col-sm-6 col-12 text-white">
                                <p><? echo $item['oborudovanie_value'] ?></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <? endif ?>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="pt-5 pb-3">
    <div class="container">
        <div class="row">
            <? foreach (CFS()->get('_loop_gallery') as $item) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0">
                    <img class="ultimate" style="width: 100%; height: 100%; object-fit: cover;" src="<? echo $item['_yachts_gallery_image'] ?>" alt="">
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<section class="py-3">
    <div class="container pb-3">
        <div class="row p-0">
            <div class="col-lg-9 col-md-8 col-sm-6 col-12 p-0">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0">
                <a href="/zaprosit-stoimost?id=<? echo the_id() ?>" class="btn btn-gold text-uppercase pt-2 d-flex align-items-center justify-content-center">
                    <span class="mr-2">Запросить цену </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
