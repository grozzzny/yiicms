<?php

use yii\helpers\Url;
use yii\web\View;

/**
 * @var View $this
 */
?>

<!--Main Navigation-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= Url::to(['/']) ?>">
                <strong><?= Yii::$app->name ?></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">

                <?= $this->render('_menu')?>

                <form class="form-inline">
                    <div class="md-form mt-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>

            </div>
        </div>
    </nav>

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/model-3.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-white-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">NEW
                                <a class="indigo-text font-weight-bold">COLLECTION</a>
                            </h1>
                            <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Free delivery & special prices</h5>
                            <a class="btn btn-outline-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">Shop</a>
                            <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">Lookbook</a>

                            <? $this->on(View::EVENT_BEGIN_BODY, function () { echo Yii::$app->view->render('@app/views/layoutsBootstrap4/_modal');}); ?>
                            <a href="#modal-callback" data-wow-delay="0.3s" data-toggle="modal" class="btn btn-outline-indigo btn-lg wow fadeInDown" role="button" aria-pressed="true"><?= Yii::t('app', 'Open modal'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->