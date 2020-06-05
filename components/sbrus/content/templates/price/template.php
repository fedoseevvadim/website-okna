
<div class="container">

    <div class="row">
        <?

        foreach ( $arResult['ITEMS'] as $item ) {

            $arrFile = CFile::GetFileArray($item['PROPERTIES']['FILE_SVG']['VALUE']);

            ?>
            <div class="col-lg-3">
                <div class="text-center intro__window-img">
                    <img src="<?=$arrFile['SRC']?>" alt="" width="140" height="140">

                </div>
                <div style="padding: 1rem;">
                    <h5><?=$item['NAME']?></h5>
                    <p><?=$item['PROPERTIES']['SIZE']['NAME']?>: <?=$item['PROPERTIES']['SIZE']['VALUE']?></p>
                    <p><?=$item['PROPERTIES']['PRICE']['NAME']?>: <?=$item['PROPERTIES']['PRICE']['VALUE']?> </p>
                </div>

            </div>
            <?

        }
        ?>

    </div>
</div>


