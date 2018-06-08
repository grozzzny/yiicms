<?
use app\widgets\Feedback;
use app\components\bootstrap4\Modal;
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 */

Modal::begin([
    'header' => Html::tag('h5', 'Heading modal', ['class' => 'modal-title']),
    'id' => 'modal-callback',
    'closeButton' => ['type' => 'button', 'class' => 'close', 'data-dismiss' => 'modal', 'aria-label' => 'Close'],
    'options' => [
        'class' => 'fade modal-theme',
    ],
    'size' => 'modal-lg'
    //'verticallyCentered' => true
]);

echo (new Feedback)->form();

Modal::end();
?>