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
                    <p>
                        ООО «<strong>Ронд яхтинг</strong>» с 2016 года является официальным и эксклюзивным дилером океанских яхт Elling на
                        Северо-Западе РФ, сотрудничает напрямую с верфью Neptun Marine Shipbulding (г. Аалст, Нидерланды)
                        Специалисты компании всегда готовы предоставить самую полную информацию о яхтах Elling,
                        организовать тест-сейл и посещение верфи.
                    </p>
                    <p>
                        Огромный опыт работы на яхтенном рынке, постоянное участие в международных выставках, менеджмент
                        судов в различных уголках России и Европы обеспечивают высокий профессиональный уровень сотрудников.
                    </p>
                    <p>
                        Компания оказывает полный спектр услуг по продаже новых и брокеражных (б.У) яхт Elling, контролю
                        строительства, менеджменту, сюрвею, подбору экипажа.
                    </p>
                    <p>
                        <strong>
                            Мы считаем, что самый важный этап продажи яхты начинается с момента ее передачи Владельцу, а
                            главный критерий оценки — положительные отзывы Судовладельцев и их рекомендации.
                        </strong>
                    </p>
                    <p>
                        Читайте в <a class="text-gold" href="">статье</a> очерк о яхте Elling E6 HighLine, в создании которой принимала участие компания
                        ООО «Ронд Яхтинг».
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
