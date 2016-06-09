<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 07.06.16
 * Time: 0:07
 */
?>

<div class="gallery-block">
    <h4><?=get_the_title()?></h4>
    <div data-uk-slideset="{small: 1, medium: 2, large: 4}">
        <div class="uk-slidenav-position">
            <ul class="uk-grid uk-slideset">
            <?php $gallery=pp_gallery_get();
            foreach ($gallery as $value):
            ?>
                <li>
                    <a href="<?=$value->url?>" data-uk-lightbox="{group:'my-group<?=get_the_ID()?>'}" title=""><div class="gallery-block-single" style="background-image: url(<?=$value->url?>)"></div></a>
                </li>
            <?php endforeach; ?>
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
        </div>
        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">.</ul>
    </div>
    <article>
    <?=get_the_content()?>
    </article>
</div>

