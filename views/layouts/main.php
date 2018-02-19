<?php
use grozzzny\partners\models\Partners;
use grozzzny\widgets\loader\LoaderWidget;
use grozzzny\widgets\schema_organization\SchemaOrganizationWidget;
use yii\bootstrap\Alert;
use yii\easyii2\models\Setting;
use yii\easyii2\modules\text\api\Text;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/**
 * @var View $this
 */

$mainPage = Yii::$app->controller->route == 'site/index';
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>

<?= LoaderWidget::widget(['color' => '#f25757']) ?>

<?= SchemaOrganizationWidget::widget([
    'name' => Setting::get('organization_name'),
    'logo' => Setting::get('organization_logo'),
    'index' => Setting::get('organization_index'),
    'city' => Setting::get('organization_city'),
    'address' => Setting::get('organization_address'),
    'phone' => Setting::get('organization_phone'),
    'email' => Setting::get('organization_email'),
]) ?>

<div id="wrapper">

    <?= $this->render('_header')?>

    <main>
        <?php if(!$mainPage) : ?>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => ['class' => 'breadcrumb breadcrumb-theme']
            ])?>
        </div>
        <?php endif; ?>

        <div class="container">
            <?php foreach (Yii::$app->session->getAllFlashes() as $type => $message) : ?>
                <?php if (in_array($type, ['success', 'danger', 'warning', 'info'])): ?>
                    <?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-' . $type],
                        'body' => $message
                    ]) ?>
                <?php endif ?>
            <?php endforeach; ?>
        </div>

        <div class="main-content <?= $mainPage ? 'main-page' : '' ?>">
            <?= $content ?>
        </div>

    </main>

    <section class="container section-partners">
        <div class="content">
            <h4 class="title"><?=Text::get('section-partners-title')?></h4>
            <div class="slider-partners owl-carousel owl-theme">
                <? foreach(Partners::findAll(['status' => Partners::STATUS_ON]) as $partner):?>
                    <a class="item" href="<?=$partner->link?>">
                        <img src="<?= Image::thumb($partner->logo, 400)?>" id="" alt="<?=$partner->name?>" title="<?=$partner->name?>">
                    </a>
                <? endforeach;?>
            </div>
        </div>
    </section>

    <?= $this->render('_footer')?>
</div>

<!-- Модуль: вставка кода -->
<? foreach (Editable::findAll(['status' => Editable::STATUS_ON]) as $editable) {
    echo $editable->code . PHP_EOL;
} ?>

<?php $this->endContent(); ?>