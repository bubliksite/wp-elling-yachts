<?php

/*
Template name: Контакты
Template Post Type: page
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>
<section class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/contact-background.png')"></section>
<section class="py-5">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase mb-5"><? echo the_title() ?></h1>
        <div class="row">
            <div class="col-lg-5 mb-4 font-open-sans">
                <p>
                    Компания Rond Yachting (Ронд Яхтинг).
                </p>
                <p>
                    Официальный дилер океанских яхт Elling  верфи Neptune Marine Shipbuilding по Северо-Западному региону РФ
                    (Санкт-Петербург, Калининград, Петрозаводск, Архангельск, Мурманск).
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mb-4 font-open-sans">
                <p>
                    Адрес: Троицкий проспект, д.6 лит В. <br>
                    Санкт-Петербург, 190005 <br>
                    <a href="tel:+7 (921) 857-81-81" class="text-gold">
                        +7 (921) 857-81-81 (Отдел продаж)
                    </a> <br>
                    email: <a class="text-gold" href="mailto: elling.yachts@gmail.com">elling.yachts@gmail.com</a> <br>
                    Instagram: <a class="text-gold" href="//instagram.com/elling_yachts">instagram.com/elling_yachtsm</a> <br>
                    Youteube: <a class="text-gold" href="#">Youtube</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="image map" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Map_spb.png')"></section>
<section class="py-5">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase mb-5">Адрес верфи</h1>
        <div class="row">
            <div class="col-lg-5 mb-4 font-open-sans">
                <p>
                    Neptune Marine Shipbuilding b.v.
                </p>
                <a href="http://www.elling-yachting.com" class="text-gold">
                    http://www.elling-yachting.com
                </a> <br>
                <a class="text-gold" href="mailto: info@neptuneshipyards.nl">info@neptuneshipyards.nl</a> <br>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mb-4 font-open-sans">
                <p>
                    Veerdam 1 <br>
                    5308 JH Aalst <br>
                    The Netherlands
                </p>
            </div>
        </div>
    </div>
</section>
<section class="image map mb-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Map_neth.png')"></section>

<?php get_footer(); ?>
