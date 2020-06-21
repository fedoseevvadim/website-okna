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

<div>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

    <header class="site-header py-1 height1 d-none d-sm-none d-md-block">

        <div class="navbar navbar-dark box-shadow">

            <div class="container d-flex justify-content-between">
                <a href="/"><img src="/local/templates/windows/images/logo.png" width="180px;"></a>

                <div>

                       <span style="color: #ffffff;"> Москва и область </span>
                </div>

                <div>
                    <span class="header-text">

                         <?
                         $APPLICATION->IncludeFile("/include/phone_top.php", Array(), Array(
                             "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                             "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                         ));
                         ?>

                    </span>
                </div>

                <div>
                    <span>

                         <?
                         $APPLICATION->IncludeFile("/include/email.php", Array(), Array(
                             "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                             "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                         ));
                         ?>

                    </span>
                </div>


                <div class="">
<a class="btn btn-sm btn-primary" href="/personal/orders/" role="button">Личный кабинет</a>
                </div>

            </div>

        </div>

    </header>

</div>


    <header class="site-header bg-dark-top sticky-top py-1 d-none d-sm-none d-md-block">

        <div class="navbar navbar-dark box-shadow sticky-top">

            <div class="container d-flex justify-content-between">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>

            </div>



        </div>

    </header>


<div class="d-xl-none d-block d-sm-none">
    <nav class="navbar navbar-expand-md header-bg bg-dark-top fixed-top header>

        <a href="/"><img src="/local/templates/windows/images/logo2.png" width="100px;"></a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars menu" style="color:var(--section-bg-white); font-size:28px;" aria-hidden="true"></i>
                    </span>

        </button>

        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3" id="navbarCollapse">


			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top_menu",
				Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N"
				)
			);?>

        </div>

    </nav>
</div>
<?

if ( $APPLICATION->GetCurPage() !== "/" ) {

?>

<div class="container" style="padding-top:2rem;">

        <div class="row">
            <div class="col-md-12">

                <h1><?=$APPLICATION->ShowTitle()?></h1>
<?
}
