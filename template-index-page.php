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
<section class="image parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/second-background.png">
</section>
    <section class="new-yacht py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-12 mb-3">
                    <div class="card">
                        <h5 class="text-gold text-uppercase pt-2">
                            E6. НОВЫЙ МИР <br>
                            ПРИКЛЮЧЕНИЙ
                        </h5>
                        <p>
                            E-Series E6 представляет собой кульминацию наших достижений в&nbsp;современном дизайне роскошных яхт
                            и&nbsp;воплощает в&nbsp;себе концепцию универсальности. Эта лодка поднимает планку, уже&nbsp;установленную E4,
                            и&nbsp;добавляет дополнительные 16 футов роскоши, позволяя вам расслабиться с&nbsp;еще большим комфортом
                            и&nbsp;увеличенной дальностью полета.
                            Серия E выходит на&nbsp;новый уровень безопасности и&nbsp;роскоши в&nbsp;современном дизайне яхт, построенных
                            из&nbsp;Twaron®&nbsp;в соответствии с&nbsp;требовательными стандартами CE категории A (океан), что так же
                            сложно, как спасательная шлюпка! Наши модели поставляются с&nbsp;опцией вспомогательного двигателя
                            для дополнительного душевного спокойствия в&nbsp;действительно тяжелых условиях! Будь то&nbsp;через
                            Ла-Манш или через пруд, вам захочется круглый год наслаждаться роскошью серии E.
                        </p>
                        <a href="/e6" class="btn btn-gold d-flex align-items-center justify-content-center w-100">
                            <span style="margin-right: 15px">Подробнее </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-12 d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Group89.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="image parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/third-background.png">
    </section>
    <section class="new-yacht py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Group90.png" width="100%" alt="">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <div class="card">
                        <h5 class="text-gold text-uppercase pt-2">
                            E6. КАМБУЗ - НАСТОЯЩИЙ ДОМ ВДАЛИ ОТ ДОМА
                        </h5>
                        <p>
                            Потрясающий камбуз с&nbsp;достаточным пространством для&nbsp;приготовления изысканных блюд
                            или&nbsp;просто закусок для&nbsp;экипажа. Идеально подходит для&nbsp;развлечения ваших
                            друзей и&nbsp;семьи и&nbsp;оснащен большим холодильником Miele с&nbsp;морозильной камерой
                            и&nbsp;посудомоечной машиной. Много места для хранения и&nbsp;удобные в&nbsp;уходе мраморные
                            столешницы делают вещи красивыми и&nbsp;простыми.
                            Каюта владельцев - идеальное место, чтобы расслабиться и&nbsp;отдохнуть от&nbsp;повседневных
                            дел. Почему бы&nbsp;не&nbsp;расслабиться и&nbsp;не&nbsp;насладиться бокалом охлажденного
                            шампанского на роскошной двуспальной кровати - вы&nbsp;это заслужили. Красиво отделанный
                            вишневым деревом, вы&nbsp;можете подумать, что&nbsp;попали в&nbsp;пятизвездочный отель
                            с&nbsp;просторной ванной комнатой с&nbsp;двойным душем, большой раковиной и&nbsp;изголовьем -
                            всем, что&nbsp;вы&nbsp;могли пожелать.
                            Откройте крышу и&nbsp;впустите солнечный свет… для ощущения «Флайбриджа» или, если хотите,
                            вы&nbsp;можете закрыть непогоду - это ваш&nbsp;выбор. Автоматический и&nbsp;герметичный люк
                            в&nbsp;крыше полностью водонепроницаем даже в&nbsp;самых суровых условиях.
                        </p>
                        <a href="/e6" class="btn btn-gold d-flex align-items-center justify-content-center w-100">
                            <span style="margin-right: 15px">Подробнее </span> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-chevron-right.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>