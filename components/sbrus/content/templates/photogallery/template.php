<!-- Core CSS file -->
<link rel="stylesheet" href="/local/lib/PhotoSwipe/dist/photoswipe.css">

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite,
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="/local/lib/PhotoSwipe/dist/default-skin/default-skin.css">

<!-- Core JS file -->
<script src="/local/lib/PhotoSwipe/dist/photoswipe.min.js"></script>

<!-- UI JS file -->
<script src="/local/lib/PhotoSwipe/dist/photoswipe-ui-default.min.js"></script>

<?
shuffle($arResult['ITEMS']); // перемешаем
?>



    <div class="row text-center">

        <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">
                <?
                foreach ( $arResult['ITEMS'] as $item ) {
                    ?>

                    <a href="<?=$item["DETAIL_PICTURE"]['SRC']?>"  data-size="1600x1200" data-med="<?=$item["DETAIL_PICTURE"]['SRC']?>" data-med-size="1024x1024" class="demo-gallery__img--main">
                        <img src="<?=$item["PREVIEW_PICTURE"]['SRC']?>" style="padding: 0.5rem;" width="400px;">
                        <figure><?=$item["NAME"]?></figure>
                    </a>


                    <?
                }
                ?>

        </div>

    </div>




<div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>

    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip">
                    <!-- <a href="#" class="pswp__share--facebook"></a>
                    <a href="#" class="pswp__share--twitter"></a>
                    <a href="#" class="pswp__share--pinterest"></a>
                    <a href="#" download class="pswp__share--download"></a> -->
                </div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center">
                </div>
            </div>
        </div>

    </div>


</div>

<script src="/local/components/sbrus/content/templates/photogallery/script.js"></script>