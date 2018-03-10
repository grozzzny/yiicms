<?php

namespace app\widgets;

use Yii;
use yii\easyii2\AdminModule;
use yii\easyii2\widgets\ReCaptcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


class Feedback extends \yii\easyii2\modules\feedback\api\Feedback
{
    public function form($options = [])
    {
        $model = new \yii\easyii2\modules\feedback\models\Feedback();
        $settings = AdminModule::getInstance()->getModule('feedback')->settings;
        $options = array_merge($this->_defaultFormOptions, $options);

        ob_start();
        $form = ActiveForm::begin([
            'enableClientValidation' => true,
            'action' => Url::to(['/admin/feedback/send'])
        ]);

        echo Html::hiddenInput('errorUrl', $options['errorUrl'] ? $options['errorUrl'] : Url::current([self::SENT_VAR => 0]));
        echo Html::hiddenInput('successUrl', $options['successUrl'] ? $options['successUrl'] : Url::current([self::SENT_VAR => 1]));

        $model->text = 'Запрос сделан со сраницы: ' . Yii::$app->urlManager->hostInfo . $_SERVER['REQUEST_URI'];
        echo $form->field($model, 'text')->hiddenInput()->label(false);
        ?>

        <h3>Мы всегда рады ответить на ваши вопросы лично</h3>
        <div class="frm-block">
            <div class="item">
                <?= $form->field($model, 'name')->input('text', ['placeholder' => 'Имя'])->label(false);?>
            </div>
            <div class="item">
                <?= $form->field($model, 'phone')->input('text', ['placeholder' => 'Номер телефона'])->label(false);?>
            </div>
            <div class="item">
                <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Email'])->label(false);?>
            </div>
            <? if($settings['enableCaptcha']):?>
                <div class="item">
                    <?= $form->field($model, 'reCaptcha')->widget(ReCaptcha::className())?>
                </div>
            <? endif;?>
            <div class="item">
                <input class="btn btn-theme" type="submit" name="web_form_submit" value="Отправить запрос">
            </div>
        </div>
        <?

        ActiveForm::end();

        return ob_get_clean();
    }
}