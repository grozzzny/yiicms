<?php
use yii\helpers\Html;

/**
 * @var string $subject
 * @var string $link
 * @var \yii\easyii2\modules\feedback\models\Feedback $feedback
 */

$this->title = $subject.' От пользователя '.$feedback->email;
?>
<p><b>Пользователь:</b> <?= $feedback->name ?></p>
<p><b>Email:</b> <?= $feedback->email ?></p>
<p><b>Телефон:</b> <?= $feedback->phone ?></p>
<hr>
<p>Список всех запросов, можете посмотреть по ссылке: <?= Html::a('здесь', $link) ?>.</p>
