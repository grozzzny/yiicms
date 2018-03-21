<?
use app\widgets\Feedback;
use yii\bootstrap\Modal;

/**
 * @var \yii\web\View $this
 */

Modal::begin([
    'header' => Yii::t('app', 'My modal'),
    'id' => 'modal-callback',
    'options' => [
        'class' => 'modal-theme',
    ],
]);

echo (new Feedback)->form();

Modal::end();
?>