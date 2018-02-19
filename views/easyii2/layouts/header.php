<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li>
                    <a href="<?= Yii::$app->homeUrl ?>" class="pull-left hidden-xs"><i class="glyphicon glyphicon-home"></i> <?= Yii::t('easyii2', 'Open site') ?></a>
                </li>
                <li>
                    <?= Html::a(
                        Yii::t('easyii2','Logout'),
                        ['/admin/sign/out'],
                        ['data-method' => 'post', 'class' => '']
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
