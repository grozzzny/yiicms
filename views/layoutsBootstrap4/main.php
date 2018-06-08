<?php
use grozzzny\widgets\loader\LoaderWidget;
use grozzzny\widgets\schema_organization\SchemaOrganizationWidget;
use yii\easyii2\models\Setting;
use yii\web\View;

/**
 * @var View $this
 */
?>

<?php $this->beginContent('@app/views/layouts/base.php'); ?>

<?= SchemaOrganizationWidget::widget([
    'name' => Setting::get('organization_name'),
    'logo' => Setting::get('organization_logo'),
    'index' => Setting::get('organization_index'),
    'city' => Setting::get('organization_city'),
    'address' => Setting::get('organization_address'),
    'phone' => Setting::get('organization_phone'),
    'email' => Setting::get('organization_email'),
]) ?>

<?= $this->render('_header')?>

<!--Main Layout-->
<main class="<?= Yii::$app->controller->route == 'site/index' ? 'main-page' : '' ?>">

    <?= $this->render('_breadcrumb')?>

    <?= $this->render('_alerts')?>

    <?= $content ?>

</main>
<!--Main Layout-->

<?= $this->render('_footer')?>

<?php $this->endContent(); ?>