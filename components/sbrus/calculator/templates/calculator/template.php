
<script src="/local/components/sbrus/calculator/templates/calculator/calc_script.js"></script>

<div class="container">

    <div class="row">
        <div class="col-6">
            <div class="row">
                <h3>1. Выберите тип окна</h3>
            </div>

            <div class="row">


                <?php

                $i = 1;

                foreach ( $arResult["TYPE_OF_WINDOW"] as $item ) {

                    $arrFile = CFile::GetFileArray($item["PREVIEW_PICTURE"]);
                    $active = "";

                    if ( $i === 1 ) {
                        $active = "active";
                        $ID_active = (int)  $item["ID"];
                    }

                    ?>
                    <div id="<?=$item["ID"]?>" name="type" onclick="selectType(<?=$item["ID"]?>)" class="type_n type<?=$item["ID"]?> <?=$active?>">

                        <div class="wrap_type">
                            <img alt="type" src="<?=$arrFile["SRC"]?>">
                        </div>

                        <div class="name_type">
                            <?//=$item["NAME"]?>
                        </div>

                    </div>
                    <?
                    $i++;
                }
                ?>

            </div>

            <div class="row">
                <h3>2. Выберите режим открывания</h3>
            </div>


            <div class="row">
                <?php

                foreach ( $arResult["OPENING_MODE"] as $item ) {

                    $arrFile    = CFile::GetFileArray($item["FIELDS"]["PREVIEW_PICTURE"]);
                    $id         = $item["FIELDS"]["ID"];
                    $display    = "none";

                    if ( $ID_active === (int) $item["PROPERTIES"]["TYPE_OF_WINDOW"]["VALUE"] ) {
                        $display    = "";
                        $active     = "";
                    }

                    ?>

                    <div name="opening_mode" style=" padding:1rem; display: <?=$display?>;"  class="type_n mode<?=$id?> <?=$active?>" onclick="selectMode(<?=$id?>)" id="<?=$item["PROPERTIES"]["TYPE_OF_WINDOW"]["VALUE"]?>_<?=$id?>">
                        <div class="wrap_type">
                            <img src="<?=$arrFile["SRC"]?>">
                        </div>
                    </div>

                    <?
                    //$arResult["OPENING_MODE"] = "";
                }

                ?>

            </div>

            <div class="row">
                <h3>3. Выберите профиль</h3>
            </div>

            <div class="row">

                <?php

                foreach ( $arResult["SHAPE"] as $item ) {

                $id = $item["FIELDS"]["ID"];
                $arrFile = CFile::GetFileArray($item["FIELDS"]["PREVIEW_PICTURE"]);

                ?>
                <div name="shape" onclick="selectShape(<?=$id?>)" style="padding:1rem; width='100px'" id="<?=$id?>" class="type_p" >

                        <img src="<?=$arrFile["SRC"]?>">
                        <div class="params_win_line text_p">
                            <span class="bold">Профиль:</span> <?=$item["PROPERTIES"]["SHAPE"]["VALUE"]?>
                        </div>
                        <div class="params_win_line text_p">
                            <span class="bold">Фурнитура:</span> <?=$item["PROPERTIES"]["FINDINGS"]["VALUE"]?>
                        </div>
                        <div class="params_win_line text_p">
                            <span class="bold">Остекление:</span> 2<?=$item["PROPERTIES"]["GLAZING"]["VALUE"]?>
                        </div>

                </div>
            <?
            }
            ?>

            </div>
        </div>

        <div class="col-6">
            <h3><div id="price"></div></h3>
        </div>

    </div>

</div>

<?
$i = 0;

foreach ( $arResult["PRICE"] as $item ) {

    $type   = $item["PROPERTIES"]["TYPE_OF_WINDOW"]["VALUE"];
    $om     = $item["PROPERTIES"]["OPENING_MODE"]["VALUE"];
    $price  = $item["PROPERTIES"]["PRICE"]["VALUE"];

    $arrPrice[$i]['type']  = $type;
    $arrPrice[$i]['om']    = $om;
    $arrPrice[$i]['price'] = $price;

    $i++;

}

?>

<script>
    let price = <?php echo json_encode($arrPrice); ?>;
</script>
