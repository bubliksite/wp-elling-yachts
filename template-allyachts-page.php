<?php

/*
Template name: Страница яхты
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>

<section class="main pb-5">
    <div class="container d-flex justify-content-center align-items-end h-100 pb-5">
        <div class="row w-100">
            <div class="col-md-6">
                <h1 class="font-weight-bold">
                    ELLING YACHT <span class="text-gold">E6</span> <br>
                    МОЩНОСТЬ И ЭЛЕГАНТНОСТЬ
                </h1>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <a href="/e6" class="btn btn-gold text-uppercase pt-2 d-flex align-items-center" style="width: max-content">
                        <span class="mr-2">Открой для себя Elling 6 </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="yachts py-5">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase">
            ПОЛНЫЙ МОДЕЛЬНЫЙ РЯД ELLING MOTOR YACHTS
        </h1>
    </div>
</section>

<section class="all-yachts pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-6 pr-0">
                <div class="all-yachts_card d-flex align-items-end mb-5" id="card_258" style="background-image: url('<?php echo CFS()->get('yachts_image', 258); ?>')">
                    <div class="px-5 pb-3 hidden_down" id="desc_258">
                        <h2 class="font-weight-normal text-gold pl-5"><span class="text-white">Elling</span> <? echo get_the_title(258) ?></h2>
                        <div>
                            <p class="text-white px-5">
                                E3 маневренный и спортивный, готовый на все, что только возможно!
                            </p>
                            <div class="pl-5">
                                <a href="/e6" class="btn btn-gold d-flex align-items-center justify-content-center w-50">
                                    <span style="margin-right: 15px">Подробнее </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-yachts_card d-flex align-items-end" id="card_256" style="background-image: url('<?php echo CFS()->get('yachts_image', 256); ?>')">
                    <div class="px-5 pb-3 hidden_down" id="desc_256">
                        <h2 class="font-weight-normal text-gold pl-5"><span class="text-white">Elling</span> <? echo get_the_title(256) ?></h2>
                        <div>
                            <p class="text-white px-5">
                                E3 маневренный и спортивный, готовый на все, что только возможно!
                            </p>
                            <div class="pl-5">
                                <a href="/e6" class="btn btn-gold d-flex align-items-center justify-content-center w-50">
                                    <span style="margin-right: 15px">Подробнее </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center mt-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Group91.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: bottom;">
                <div
                        class="all-yachts_card d-flex align-items-end"
                        id="card_152"
                        style="
                                width:90%;
                                height: 360px;
                                background-image: url('<?php echo CFS()->get('yachts_image', 152); ?>')">
                    <div class="px-5 pb-3 hidden_down" id="desc_152">
                        <h2 class="font-weight-normal text-gold pl-5"><span class="text-white">Elling</span> <? echo get_the_title(152) ?></h2>
                        <div>
                            <p class="text-white px-5">
                                E3 маневренный и спортивный, готовый на все, что только возможно!
                            </p>
                            <div class="pl-5">
                                <a href="/e6" class="btn btn-gold d-flex align-items-center justify-content-center w-50">
                                    <span style="margin-right: 15px">Подробнее </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let yachtsArr = [258, 256, 152]
    for(let i=0; i<yachtsArr.length; i++) {
        document.getElementById(`card_${yachtsArr[i]}`).addEventListener('mouseenter', ()=>{
            document.getElementById(`desc_${yachtsArr[i]}`).classList.remove('hidden_down')
        })
        document.getElementById(`card_${yachtsArr[i]}`).addEventListener('mouseleave', ()=>{
            document.getElementById(`desc_${yachtsArr[i]}`).classList.add('hidden_down')
        })
    }
</script>

<?php get_footer(); ?>
