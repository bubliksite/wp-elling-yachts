<!DOCTYPE html>
<html class="wide wow-animation desktop rd-navbar-static-linked landscape" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta property="og:title" content="TITLE">
        <meta property="og:description" content="DESCRIPTION">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/IMAGE">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;700&display=swap" rel="stylesheet">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
	<body>
    <header class="py-3 bg-dark-blue">
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-between">
                <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-icons-outlined">menu</span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link active" href="/">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Компания</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Яхты "Elling"</a></li>
                        <li class="nav-item"><a class="nav-link" href="">О верфи</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Новости</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Брокераж Яхт</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Услуги судовладельцам</a></li>
                        <li class="nav-item">
                            <a class="nav-link d-flex m-1" href="">
                                <img class="me-1" src="<?php echo get_template_directory_uri(); ?>/images/icon-call.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>