<?php

/*
Template name: Запрос стоимости
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>

<?
$query = $_SERVER['QUERY_STRING'];
parse_str($query, $arr);
$id = 0;
foreach ($arr as $a) {
    $id = $a;
}
?>

<section class="image"
         style="
                 background-image: url('<? echo CFS()->get('yachts_main_image', $id) ?>');
                 min-height: 330px !important;
                 ">
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="card">
            <h1 class="text-gold font-weight-normal text-center text-uppercase text-underline my-1">
                <u>ELLING <? echo get_the_title($id); ?> - ЗАПРОС ЦЕНЫ</u>
            </h1>
            <div class="bordered mt-5">
                <h3 class="text-gold font-weight-normal text-uppercase text-center py-2 m-0">
                    СТАНДАРТНАЯ СПЕЦИФИКАЦИЯ ELLING <? echo get_the_title($id); ?>
                </h3>
            </div>
            <div class="accordion py-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header font-open-sans" id="headingOne">
                        <button
                                id="button-1"
                                class="accordion-button btn d-flex align-items-center justify-content-start"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                                style="text-transform: none; width: 100%;"
                        >
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg"
                                    style="transform: rotate(90deg); margin-right: 20px;"
                                    id="chevron-down-1"
                            >
                            Общие
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row my-4">
                                <div class="col-md-6">
                                    <p class="lead text-gold text-uppercase mb-0">
                                        ЭКСТЕРЬЕР СПЕЦИФИКАЦИЯ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('yachts_spec_exterrior', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        КОМФОРТ И БЕЗОПАСНОСТЬ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('yachts_spec_comfort', $id);?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="lead text-gold text-uppercase mb-0">
                                        ТЕХНИЧЕСКАЯ СПЕЦИФИКАЦИЯ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('yachts_spec_tech', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        СПЕЦИФИКАЦИЯ ПРИВОДА И УПРАВЛЕНИЯ

                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('yachts_spec_privod', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        СПЕЦИФИКАЦИЯ ЭЛЕКТРИКИ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('yachts_spec_electricity', $id);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header font-open-sans" id="headingTwo">
                        <button
                                id="button-2"
                                class="accordion-button btn d-flex align-items-center justify-content-start"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                                style="text-transform: none; width: 100%;"
                        >
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg"
                                    style="transform: rotate(90deg); margin-right: 20px;"
                                    id="chevron-down-2"
                            >
                            Интерьер
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row my-4">
                                <div class="col-md-6">
                                    <p class="lead text-gold text-uppercase mb-0">
                                        ОСНОВНОЕ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        НИЖНИЙ САЛОН
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        КАЮТА ВЛАДЕЛЬЦА
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        БОКОВАЯ КАЮТА
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        КАМБУЗ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="lead text-gold text-uppercase mb-0">
                                        ВЕРХНИЙ САЛОН
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        НОСОВАЯ КАЮТА

                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                    <p class="lead text-gold text-uppercase mb-0">
                                        САНУЗЕЛ
                                    </p>
                                    <hr class="mt-1" style="border-bottom: 1px solid #C0B481;">
                                    <div class="font-open-sans">
                                        <? echo CFS()->get('', $id);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
