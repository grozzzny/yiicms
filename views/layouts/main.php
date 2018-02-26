<?php
use grozzzny\editable\models\Editable;
use grozzzny\editable\widgets\EditableWidget;
use grozzzny\partners\models\Partners;
use grozzzny\partners\widgets\PartnersWidget;
use grozzzny\widgets\loader\LoaderWidget;
use grozzzny\widgets\schema_organization\SchemaOrganizationWidget;
use yii\bootstrap\Alert;
use yii\easyii2\helpers\Image;
use yii\easyii2\models\Setting;
use yii\easyii2\modules\text\api\Text;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use app\widgets\Feedback;

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

    <section class="section-callback">
        <div class="container">

            <?php if(Yii::$app->request->get(Feedback::SENT_VAR)) : ?>
                <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Message successfully sent</h4>
            <?php else : ?>
                <?= (new Feedback)->form() ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="container section-partners">
        <div class="content">
            <h2 class="title text-center"><?=Text::get('section-partners-title')?></h2>
            <div class="slider-partners owl-carousel owl-theme">
                <?= PartnersWidget::widget()?>
            </div>
        </div>
    </section>

    <?= $this->render('_footer')?>
</div>

<!-- Модуль: вставка кода -->
<?= EditableWidget::widget();?>

<?php $this->endContent(); ?>