<?
use yii\helpers\Html;
use yii\web\View;

/**
 * @var View $this
 * @var array $settings
 */

$this->title = $settings['title'];
?>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- background image -->
    <div class="fullscreen-bg" style="<?= !empty($settings['background']) ? 'background-image: url(\''.$settings['background'].'\');' : ''?>')"></div>

    <!-- banner start -->
    <!-- ================ -->
    <div class="pv-40 dark-translucent-bg">
        <div class="container">

            <div class="row justify-content-lg-center">
                <div class="col-lg-8 text-center pv-20">
                    <div class="object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                        <!-- logo -->
                        <div id="logo" class="logo text-center my-3">
                            <?= Html::img( $settings['logo'], ['style' => 'margin: auto;'])?>
                        </div>
                        <!-- name-and-slogan -->
                        <p class="small"><?= $settings['title']?></p>
                        <h1 class="page-title text-center"><?= $settings['heading']?></h1>
                        <div class="separator"></div>
                        <p class="text-center"><?= $settings['descriptions']?></p>
                        <ul class="list-inline mb-20 text-center">
                            <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i><?= $settings['address']?></li>
                            <li class="list-inline-item"><a href=":tel<?= preg_replace('/[^\d+]+/','', $settings['phone'])?>" class="link-dark"><i class="text-default fa fa-phone pl-2 pr-1"></i><?= $settings['phone']?></a></li>
                            <li class="list-inline-item"><a href="mailto:<?= $settings['email']?>" class="link-dark"><i class="text-default fa fa-envelope-o pl-2 pr-1"></i><?= $settings['email']?></a></li>
                        </ul>
                        <!-- countdown start -->
                        <div class="countdown clearfix"></div>
                        <!-- countdown end -->
                        <ul class="social-links circle animated-effect-1 text-center">
                            <? foreach ($settings['social'] as $btn):?>
                                <li class="<?=$btn['name']?>"><a href="<?=$btn['link']?>"><?=$btn['icon']?></a></li>
                            <? endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .subfooter start -->
            <!-- ================ -->
            <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Copyright © <?= date('Y')?> <?= $settings['copyright']?></p>
            <!-- .subfooter end -->
        </div>
    </div>
    <!-- banner end -->
</div>
<!-- page-wrapper end -->
