<?php

use yii\bootstrap\Alert;
use yii\web\View;

/**
 * @var View $this
 */
?>

<?php foreach (Yii::$app->session->getAllFlashes() as $type => $message) : ?>
    <?php if (in_array($type, ['success', 'danger', 'warning', 'info'])): ?>
        <?= Alert::widget([
            'options' => ['class' => 'alert alert-' . $type . ' show', 'role' => 'alert'],
            'body' => $message,
        ]) ?>
    <?php endif ?>
<?php endforeach; ?>
