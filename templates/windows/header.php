<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">

<head>

    <title><?$APPLICATION->ShowTitle()?></title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
    <? $APPLICATION->ShowHead(); ?>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" type="text/css" rel="stylesheet" />
    <link href="<?=SITE_TEMPLATE_PATH?>/css/carousel.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php
    \Bitrix\Main\Page\Asset::getInstance()->addJs("https://code.jquery.com/jquery-3.5.1.js");
    \Bitrix\Main\Page\Asset::getInstance()->addJs("https://kit.fontawesome.com/9e22044e4d.js");
    ?>

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">


</head>

<body>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<header>

    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О нас</h4>
                    <p class="text-muted">
                        <?
                        $APPLICATION->IncludeFile("/include/about.php", Array(), Array(
                            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                        ));
                        ?>

                        </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Контактная информация</h4>
                    <ul class="text-muted">
                        <?
                        $APPLICATION->IncludeFile("/include/phone.php", Array(), Array(
                            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                        ));
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-dark bg-dark-top box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Окна</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

</header>
