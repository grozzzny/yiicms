<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\helpers\Html;
/**
 * @var View $this
 */
?>

<header>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="field-info-top address">
                        <div class="description">Адрес приёма заявок:</div>
                        <i class="fa fa-map"></i>
                        г. Калининград, ул. Горького 55, оф. 345
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="field-info-top text-right">
                        <div class="description">Внешнее эл. снабжение:</div>
                        <i class="fa fa-phone"></i>
                        <span>+7 (952) 499 42 38</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="field-info-top text-right">
                        <div class="description">Внутренее эл. снабжение:</div>
                        <i class="fa fa-phone"></i>
                        <span>+7 (921) 269 39 34</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="field-info-top text-right">
                        <div class="description">Наш электронный адрес:</div>
                        <i class="fa fa-envelope"></i>
                        <span>info@electro-profi.pro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <? NavBar::begin([
                //'brandLabel' => 'Yiicms',
                'options' => ['class' => 'navbar navbar-default navbar-theme']
            ]);
            echo Nav::widget([
                'items' => [
                    ['label' => 'Главная', 'url' => ['/']],
                    ['label' => 'О нас', 'url' => ['/shop/']],
                    ['label' => 'Услуги', 'url' => ['/news/']],
                    ['label' => 'Цены (прайс)', 'url' => ['/articles/']],
                    ['label' => 'Фотогалерея', 'url' => ['/gallery/']],
                    ['label' => 'Наши работы', 'url' => ['/guestbook/']],
                    ['label' => 'Вопрос ответ', 'url' => ['/faq/']],
                    ['label' => 'Контакты', 'url' => ['/contact/']],
                ],
                'options' => ['class' => 'navbar-nav'],
            ]);
            NavBar::end();?>
        </div>
    </div>

</header>


<?= \grozzzny\widgets\sidebar\Sidebar::widget([
    'options' => [
        'class' => 'sidebar__menu-list',
        'encode' => false,
        'itemOptions' => ['class' => 'sidebar__menu-item']
    ],
    'items' => [
        Html::a('Электромонтаж внешних сетей', ['/championships']),
        Html::a('Электромонтаж внутренних сетей', ['/teames']),
        Html::a('Проектирование', ['/schedules?filter=last']),
        Html::a('Комплекс услуг по документам', ['/players']),
        Html::a('Покупка вашего ТП, кабеля', ['/trainers'], ['class' => 'active']),
        Html::a('Установка камер видеонаблюдения', ['/referees']),
        Html::a('Монтаж охранной сигнализации', ['/ice_arenas']),
    ],
    'footer' => $this->render('@app/views/layouts/_sidebar_footer')
]);
?>
