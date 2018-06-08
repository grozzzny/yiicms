<?php

use grozzzny\widgets\seo\Seo;
use yii\easyii2\modules\article\api\Article;
use yii\easyii2\modules\carousel\api\Carousel;
use yii\easyii2\modules\gallery\api\Gallery;
use yii\easyii2\modules\guestbook\api\Guestbook;
use yii\easyii2\modules\news\api\News;
use yii\easyii2\modules\news\api\NewsObject;
use yii\easyii2\modules\page\api\Page;
use yii\easyii2\modules\text\api\Text;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var \yii\web\View $this
 * @var NewsObject $item
 */

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);

Seo::widget([
    'title' => $this->title,
    'description' => $page->seo('description', ''),
    'image' => Yii::$app->urlManager->baseUrl . '/images/noimage.jpg',
    'keywords' => $page->seo('keywords', ''),
]);
?>

<div class="container">

    <!--Section: Products v.3-->
    <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h1 class="section-heading h1 pt-4 text-center"><?= $page->seo('h1', $page->title) ?></h1>
        <!--Section description-->
        <p class="section-description mb-5 pb-3 text-center"><?= Text::get('index-welcome-title') ?></p>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(36).jpg"
                             class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center no-padding">
                        <!--Category & Title-->
                        <a href="" class="text-muted">
                            <h5>Blouse</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">White Blouse</a>
                            </strong>
                        </h4>

                        <!--Description-->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                        </p>

                        <!--Card footer-->
                        <div class="card-footer">
              <span class="float-left">59$
                <span class="discount">199$</span>
              </span>
                            <span class="float-right">
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart"></i>
                </a>
              </span>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(37).jpg"
                             class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center no-padding">
                        <!--Category & Title-->
                        <a href="" class="text-muted">
                            <h5>Accessories</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Black hat</a>
                            </strong>
                        </h4>

                        <!--Description-->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                        </p>

                        <!--Card footer-->
                        <div class="card-footer">
              <span class="float-left">39$
                <span class="discount">99$</span>
              </span>
                            <span class="float-right">
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fa fa-heart"></i>
                </a>
              </span>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(38).jpg"
                             class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center no-padding">
                        <!--Category & Title-->
                        <a href="" class="text-muted">
                            <h5>Sweatshirt</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Flower</a>
                            </strong>
                        </h4>

                        <!--Description-->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima.
                        </p>

                        <!--Card footer-->
                        <div class="card-footer">
              <span class="float-left">79$
                <span class="discount">299$</span>
              </span>
                            <span class="float-right">
                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart"></i>
                </a>
              </span>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Grid column-->

            <!--Fourth column-->
            <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                    <!--Card image-->
                    <div class="view overlay z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(39).jpg"
                             class="card-img-top" alt="">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body text-center no-padding">
                        <!--Category & Title-->
                        <a href="" class="text-muted">
                            <h5>Outwear</h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href="">Denim jacket</a>
                            </strong>
                        </h4>

                        <!--Description-->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima.
                        </p>

                        <!--Card footer-->
                        <div class="card-footer">
              <span class="float-left">79$
                <span class="discount">299$</span>
              </span>
                            <span class="float-right">
                <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                  <i class="fa fa-heart"></i>
                </a>
              </span>
                        </div>

                    </div>
                    <!--Card content-->

                </div>
                <!--Card-->

            </div>
            <!--Fourth column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Products v.3-->

</div>


<div class="container">

    <!--Projects section v.4-->
    <section class="text-center pb-5 wow fadeIn">

        <!--Section heading-->
        <h2 class="font-weight-bold h1 mt-5">
            <strong>Fashion news</strong>
        </h2>
        <!--Section description-->
        <p class="px-5 mb-5 pb-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-4">
                <div class="card card-image"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/slide%20(31).jpg');">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <a href="" class="purple-text">
                                <h5>
                                    <i class="fa fa-plane pr-2"></i>Fashion week</h5>
                            </a>
                            <h3 class="mb-4 mt-4">
                                <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quod minima
                                assumenda qui mollitia
                                architecto soluta at ipsa itaque nam, aliquam minus odit expedita voluptatibus fugiat
                                amet, nostrum error
                                dolorum!.</p>
                            <a class="btn btn-secondary btn-sm">
                                <i class="fa fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <div class="card card-image"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(60).jpg');">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <a href="" class="pink-text">
                                <h5>
                                    <i class="fa fa-camera pr-2"></i>Street style</h5>
                            </a>
                            <h3 class="mb-4 mt-4">
                                <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                                voluptatem, optio
                                vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                dignissimos.</p>
                            <a class="btn btn-pink btn-sm">
                                <i class="fa fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <div class="card card-image"
                     style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(58).jpg');">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <a href="" class="green-text">
                                <h5>
                                    <i class="fa fa-eye pr-2"></i>Summer trends</h5>
                            </a>
                            <h3 class="mb-4 mt-4">
                                <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                                voluptatem, optio
                                vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                dignissimos.</p>
                            <a class="btn btn-success btn-sm">
                                <i class="fa fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Projects section v.4-->

</div>
