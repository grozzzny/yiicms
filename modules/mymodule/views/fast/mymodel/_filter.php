<?
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\web\View;
/**
 * @var View $this
 * @var \yii\easyii2\components\FastModelInterface $current_model
 */
?>

<?=Html::beginForm(Url::toRoute(['a/', 'slug' => $current_model::getSlugModel()]), 'get');?>

    <li style="float:right; margin-left: 20px;">
        <?=Html::input('string', 'text', Yii::$app->request->get('text'),[
            'placeholder'=> Yii::t('app', 'Search...'),
            'class'=> 'form-control',
        ])?>
    </li>

<?=Html::endForm();?>