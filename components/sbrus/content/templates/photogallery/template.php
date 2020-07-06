<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />
<link rel="stylesheet" href="Lightbox-Gallery.css" />
<link rel="stylesheet" href="/local/components/sbrus/content/templates/photogallery/lighbox-gallery.css" />

<?
shuffle($arResult['ITEMS']); // перемешаем
?>


<div class="photo-gallery">
    <div class="container">
        <div class="row photos">
            <?
            foreach ( $arResult['ITEMS'] as $item ) {
                ?>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="<?=$item["DETAIL_PICTURE"]['SRC']?>"><img class="img-fluid" src="<?=$item["DETAIL_PICTURE"]['SRC']?>" /></a></div>

                <?
            }
        ?>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>