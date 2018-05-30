<?php
namespace app\modules\coming_soon\controllers;


use app\modules\coming_soon\ComingSoonModule;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $settings = ComingSoonModule::getInstance()->getSettings();

        $settingsCountTo = [
            'expiryDate' => $settings['expiryDate'],
            'days' => Yii::t('app', 'days'),
            'hours' => Yii::t('app', 'hours'),
            'minutes' => Yii::t('app', 'minutes'),
            'seconds' => Yii::t('app', 'seconds'),
        ];

        $this->view->registerJsVar('settingsCountTo', $settingsCountTo);

        return $this->render('index', ['settings' => $settings]);
    }
}