<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\easyii2\widgets\Redactor;
?>
<?php $form = ActiveForm::begin([
    'enableClientValidation' => true,
    'options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']
]); ?>
<?php if($model->image) : ?>
    <img src="<?= $model->image ?>" style="width: 848px">
<?php endif; ?>
<?= $form->field($model, 'image')->fileInput() ?>
<?= $form->field($model, 'link') ?>
<?php if($this->context->module->settings['enableTitle']) : ?>
    <?= $form->field($model, 'title')->textarea() ?>
<?php endif; ?>
<?php if($this->context->module->settings['enableText']) : ?>
    <?= $form->field($model, 'text')->widget(Redactor::className(),[
        'options' => [
            'minHeight' => 400,
            'imageUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
            'fileUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'news']),
            'plugins' => [
                "alignment",
                "clips",
                "counter",
                "definedlinks",
                "fontcolor",
                "fontfamily",
                "fontsize",
                "fullscreen",
                "filemanager",
                "imagemanager",
                "inlinestyle",
                "limiter",
                "properties",
                //"source",
                "table",
                //"textdirection",
                "textexpander",
                "video",
                "codemirror",
            ],
            'codemirror:' => [
                'lineNumbers' => true,
                'mode' => 'xml',
                'indentUnit' => 4
            ]
        ]
    ]) ?>
<?php endif; ?>
<?= Html::submitButton(Yii::t('easyii2', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>