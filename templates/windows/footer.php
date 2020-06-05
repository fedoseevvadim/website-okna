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

                <div style="padding-top:1rem;">
                    <?
                    $APPLICATION->IncludeFile("/include/socnet_footer.php", Array(), Array(
                        "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                        "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    ));
                    ?>
                </div>

            </div>

            <div class="col-md-4 text-center">
                    <?
                    $APPLICATION->IncludeFile("/include/phone.php", Array(), Array(
                        "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                        "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                    ));
                    ?>
                <br>
                <i class="far fa-envelope"> email@email.ru</i><br>
                <i class="far fa-map"> Адрес</i>

            </div>

            <div class="col-md-4 text-center">
                <i class="fas fa-user-secret text-muted"> Политика конфиденциальности</i>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12 text-center">
                <p class="text-muted">
                <?
                $APPLICATION->IncludeFile("/include/copyright.php", Array(), Array(
                    "MODE"      => "php",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                ));
                ?>
                </p>
            </div>

        </div>

    </div>

</footer>


<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
