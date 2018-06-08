<?php

use grozzzny\editable\widgets\EditableWidget;
use grozzzny\soc_link\models\SocLink;
use yii\helpers\Url;
use yii\web\View;
/**
 * @var View $this
 */
?>

<!--Footer-->
<footer class="page-footer pt-4 mt-4 text-center text-md-left mdb-color lighten-2">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 mr-auto">
                <h5 class="text-uppercase mb-3">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-md-2 ml-auto">
                <h5 class="text-uppercase mb-3">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-md-2 ml-auto">
                <h5 class="text-uppercase mb-3">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Fourth column-->
            <div class="col-md-3 ml-auto">
                <h5 class="text-uppercase mb-3">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
        <ul class="list-unstyled list-inline">

            <? foreach (SocLink::find()->all() as $soc):?>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li" href="<?=$soc->link?>">
                        <i class="<?=$soc->icon?>" title="<?=$soc->name?>"> </i>
                    </a>
                </li>
            <? endforeach;?>

        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            &copy; <?=date('Y')?> Copyright:
            <a href="<?= Url::to(['/'])?>"> <?=Yii::$app->name?> </a>. Development by <a target="_blank" href="http://pr-kenig.ru">PRkenig</a></p>

            <!-- Модуль: вставка кода -->
            <?= EditableWidget::widget();?>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

