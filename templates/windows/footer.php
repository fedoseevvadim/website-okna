

<footer class="bg-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu",
                    array(
                        "ROOT_MENU_TYPE" => "bottom",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_TYPE" => "A",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(),
                    ),
                    false
                );?>
            </div>

            <div class="col-md-4">
                <?
                $APPLICATION->IncludeFile("/include/phone.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
            </div>

            <div class="col-md-4">
                <a>О компании</a>
            </div>

        </div>
    </div>

</footer>

</body>
