
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?
            $i = 0;
            foreach ( $arResult['ITEMS'] as $item ) {

                if ( $i === 0 ) {
                    $active = "active";
                }
                ?>
                <li data-target="#myCarousel" data-slide-to="$i" class="<?=$active?>"></li>
                <?
                $i++;
            }
            ?>

        </ol>
        <div class="carousel-inner">

            <?
            $i = 0;

            foreach ( $arResult['ITEMS'] as $item ) {

                $active = "carousel-item-next";

                if ( $i === 0 ) {
                    $active = "active";
                }

                ?>
                <div class="carousel-item <?=$active?> carousel-item-left">
                    <img class="first-slide" src="<?=$item['DETAIL_PICTURE']['SRC']?>">
                    <div class="container">
                        <div class="carousel-caption <?=$item['PROPERTIES']['TEXT_ALIGN']['VALUE']?>">
                            <h1><?=$item['PROPERTIES']['TITLE']['VALUE']?></h1>
                            <p class="d-none d-sm-none d-md-block"><?=$item['PROPERTIES']['SUB_TITLE']['VALUE']?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button"><?=$item['PROPERTIES']['BUTTON']['VALUE']?></a></p>
                        </div>
                    </div>
                </div>
                <?

                $i++;
            }
            ?>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
</main>