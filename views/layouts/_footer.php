<?php
use grozzzny\soc_link\models\SocLink;
use grozzzny\soc_link\widgets\SocLinkWidget;
use yii\web\View;
/**
 * @var View $this
 */
?>

<footer>
    <div class="container footer-content">
        <div class="row">
            <div class="col-xs-6" data-sr="wait 0.5s, then enter left and move 40px over 1s">
                <div class="copyright">
                    <p>&copy; <?=date('Y')?> All right reserved <a href="/"><?=Yii::$app->name?></a>. Development by <a target="_blank" href="http://pr-kenig.ru">PRkenig</a></p>
                </div>
            </div>

            <div class="col-xs-6 text-right" data-sr="wait 0.5s, then enter right and move 40px over 1s">
                <?= SocLinkWidget::widget(['options' => [
                    'class' => 'soc-link soc-link-theme'
                ]]) ?>
            </div>
        </div>
    </div>
</footer>