<?php
/**
 * @var \yii\web\View $this
 * @var yii\mail\BaseMessage $content
 */

$style_font = "font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6;";
$bgcolor = '#eeeeee';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="<?= $style_font ?> margin: 0; padding: 0;">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php $this->head() ?>
</head>
<body bgcolor="#f6f6f6" style="<?= $style_font ?> -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; margin: 0; padding: 0;">
<table class="body-wrap" style="<?= $style_font ?> width: 100%; margin: 0; padding: 20px;">
    <tr style="<?= $style_font ?> margin: 0; padding: 0;">
        <td style="<?= $style_font ?> margin: 0; padding: 0;"></td>
        <td class="container" bgcolor="#FFFFFF" style="<?= $style_font ?> display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0; border: 1px solid #f0f0f0;">
            <div style="background-color: <?= $bgcolor ?>; padding: 30px; text-align: center;">
                <img src="https://placehold.it/300x100&text=logo" style="max-width: 100%" alt="">
            </div>
            <div class="content" style="<?= $style_font ?> max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table style="<?= $style_font ?> width: 100%; margin: 0; padding: 0;">
                    <tr style="<?= $style_font ?> margin: 0; padding: 0;">
                        <td style="<?= $style_font ?> margin: 0; padding: 0;">
                            <?php $this->beginBody() ?>
                            <?= $content ?>
                            <?php $this->endBody() ?>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="<?= $style_font ?> margin: 0; padding: 0;"></td>
    </tr>
</table>
<table class="footer-wrap" style="<?= $style_font ?> width: 100%; clear: both !important; margin: 0; padding: 0;">
    <tr style="<?= $style_font ?> margin: 0; padding: 0;">
        <td style="<?= $style_font ?> margin: 0; padding: 0;"></td>
        <td class="container" style="<?= $style_font ?> display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">
            <div class="content" style="<?= $style_font ?> max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table style="<?= $style_font ?> width: 100%; margin: 0; padding: 0;">
                    <tr style="<?= $style_font ?> margin: 0; padding: 0;">
                        <td align="center" style="<?= $style_font ?> margin: 0; padding: 0;">
                            <p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.6; color: #666; font-weight: normal; margin: 0 0 10px; padding: 0;">
                                © <?= Yii::$app->name ?> <?= date('Y') ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="<?= $style_font ?> margin: 0; padding: 0;"></td>
    </tr>
</table>
</body>
</html>
<?php $this->endPage() ?>