<?php
use kartik\select2\Select2;
use yii\easyii\widgets\Redactor;
use yii\easyii2\widgets\DateTimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use grozzzny\widgets\switch_checkbox\SwitchCheckbox;
use yii\web\View;
/**
 * @var View $this
 * @var \app\modules\mymodule\models\MyModel $model
 */

$module = $this->context->module->id;
?>

<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']
]); ?>

<?= $this->render('@easyii2/views/fast/_image_file', ['model' => $model, 'attribute' => 'image_file'])?>
<?= $form->field($model, 'image_file')->fileInput() ?>

<?= $form->field($model, 'name') ?>

<?= $this->render('@easyii2/views/fast/_file', ['model' => $model, 'attribute' => 'file'])?>
<?= $form->field($model, 'file')->fileInput() ?>

<?=SwitchCheckbox::widget([
    'model' => $model,
    'attributes' => [
        'status'
    ]
])?>

<?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>