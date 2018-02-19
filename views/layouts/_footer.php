<?php
use yii\easyii2\modules\subscribe\api\Subscribe;
use yii\web\View;
/**
 * @var View $this
 */
?>

<footer>
    <div class="container footer-content">
        <div class="row">
            <div class="col-md-2">
                Subscribe to newsletters
            </div>
            <div class="col-md-6">
                <?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                    You have successfully subscribed
                <?php else : ?>
                    <?//= Subscribe::form() ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-right">
                ©2018 grozzzny
            </div>
        </div>
    </div>
</footer>