<?php

/*
Template name: Новости
Template Post Type: page, archive, news
Theme URI:
Description: Тема главной страницы
Author: Сергей Москаленко
Author URI: http://bublik.site
Version: 1.0
*/

?>

<?php get_header(); ?>

<section class="py-5 news">
    <div class="container py-5">
        <h1 class="text-gold text-uppercase mb-5">НОВОСТИ ROND YACHTING LLC</h1>
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<? the_permalink() ?>" class="col-lg-4 mb-4">
                    <div id="news-<? echo get_the_id() ?>" style="background-image: url('<? echo get_the_post_thumbnail_url(0, 'large')?>');" class="img d-flex align-items-end justify-content-center">
                        <div class="caption w-100" id="caption-<? echo get_the_id() ?>">
                            <p class="lead m-0">
                                <? echo the_title() ?>
                            </p>
                        </div>
                    </div>
                </a>
                <script>
                    document.getElementById('news-<? echo get_the_id() ?>').addEventListener('mouseover', ()=> {
                        document.getElementById('caption-<? echo get_the_id() ?>').classList.add('active')
                    })
                    document.getElementById('news-<? echo get_the_id() ?>').addEventListener('mouseleave', ()=> {
                        document.getElementById('caption-<? echo get_the_id() ?>').classList.remove('active')
                    })
                </script>
            <?php endwhile; ?>
            <?php endif; ?>
            <? the_posts_pagination([
            'prev_text'    => __('<span class="material-icons">arrow_back</span>'),
	        'next_text'    => __('<span class="material-icons">arrow_forward</span>')
            ]) ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>
