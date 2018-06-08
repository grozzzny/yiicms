<?php
use yii\bootstrap\Nav;
use yii\web\View;

/**
 * @var View $this
 */

?>

<?= Nav::widget([
    'options' => ['class' => 'navbar-nav mr-auto'],
    'items' => [
        [
            'label' => 'Home <span class="sr-only">(current)</span>',
            'encode' => false,
            'options' => ['class' => 'nav-item'],
            'linkOptions' => ['class' => 'nav-link'],
            'url' => ['/'],
            'active' => Yii::$app->controller->route == 'site/index'
        ],
        [
            'label' => 'Contacts',
            'options' => ['class' => 'nav-item'],
            'linkOptions' => ['class' => 'nav-link'],
            'active' => Yii::$app->controller->id == 'contacts',
            'url' => ['/contacts']
        ]
    ]
]);?>