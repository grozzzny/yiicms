<?php


namespace app\handlers;


use Yii;
use yii\base\Component;
use yii\easyii2\models\Setting;

class MailerHandler extends Component
{
    protected function getAdminEmail()
    {
        return Setting::get('admin_email');
    }

    protected function getSender()
    {
        return Setting::get('robot_email');
    }

    protected function send($to, $subject, $view, $params = [])
    {
        return Yii::$app->mailer->compose($view, $params)
            ->setTo($to)
            ->setFrom($this->sender)
            ->setSubject($subject)
            ->send();
    }
}