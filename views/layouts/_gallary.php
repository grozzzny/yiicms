<?php
use yii\web\View;

/**
 * @var View $this
 * @var \yii\easyii2\modules\gallery\api\PhotoObject[] $photos
 */
?>
<div class="gallary">
    <? foreach ($photos as $photo):?>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a class="item item-gallary" href="<?=$photo->thumb(900)?>" rel="gallery" data-fancybox="group" data-caption="<?=$photo->description?>">
                <img src="<?=$photo->thumb(300, 250, true)?>" alt="<?=$photo->description?>" />
            </a>
        </div>
    <? endforeach;?>
</div>