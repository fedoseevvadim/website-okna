
<div class="container">

    <div class="row">
        <?

        foreach ( $arResult['ITEMS'] as $item ) {

            ?>
            <div class="col-lg-4">
                <div class="text-center">
                    <img class="rounded-circle" src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="" width="140" height="140">
                    <h4><?=$item['PROPERTIES']['TITLE']['VALUE']?></h4>
                    <p><?=$item['PROPERTIES']['SUB_TITLE']['VALUE']?></p>
                </div>


            </div>
            <?

        }
        ?>

    </div>
 </div>
