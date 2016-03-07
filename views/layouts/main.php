<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
//use app\widgets\WLang;
use yii\helpers\Url;
use yii\bootstrap\Carousel;
use app\models\Slide;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= Yii::$app->getHomeUrl() ?>images/favicon.png" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <?php //echo WLang::widget();?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php
                /** @var Slide[] $slides */
                $slides = Slide::find()->all();
                $items = [];
                foreach($slides as $slide) {
                    $items[] = "<img src='/{$slide->source_url}'>";
                }
                ?>
            </div>
            <div class="col-xs-12">

                <div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php for($i=0; $i< count($items); ++$i) { ?>
                            <li data-target="#main-slider" data-slide-to="<?= $i ?>" <?= !$i?'class="active"':''?>></li>
                        <?php } ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php foreach($items as $index => $item) : ?>

                            <div class="<?= !$index?'active':'' ?> item">
                                <?= $item ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl'   => Yii::$app->homeUrl,
                    'options'    => [
                        //'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items'   => [
                        ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
                        ['label' => Yii::t('app', 'Our dogs'), 'url' => ['/site/our-dogs']],
                        ['label' => Yii::t('app', 'Puppies'), 'url' => ['/site/puppies']],
                        ['label' => Yii::t('app', 'Gallery'), 'url' => ['/site/gallery']],
                        ['label' => Yii::t('app', 'Our friends'), 'url' => ['/site/our-friends']],
                        ['label' => Yii::t('app', 'Contacts'), 'url' => ['/site/contacts']],
                    ],
                ]);
                NavBar::end();
                ?></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => ['class' => 'common-background common-border breadcrumb']
                ]) ?>
                <div class="common-background common-border content">
                    <?= $content ?>
                </div>
            </div>
            <div class="right-side-bar col-xs-12 col-sm-3">
                <div class="common-background common-border nursery-information">
                    <p><?= Yii::t('app', 'nursery') ?></p>

                    <p><?= Yii::$app->name ?></p>

                    <p><?= Yii::t('app', 'owner & breeder:') ?></p>

                    <p><?= Yii::t('app', 'Lesya Usatyuk') ?></p>

                    <p><?= Yii::t('app', 'lesyausatyuk@gmail.com') ?></p>

                    <p><?= Yii::t('app', '') ?></p>

                    <p><?= Yii::t('app', '') ?></p>

                    <p><?= Yii::t('app', 'ukraine / vinnitsa') ?></p>

                    <p><?= Yii::t('app', 'we are in social networks') ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<footer class="footer container common-border">
    <div class="row">
        <div class="common-background col-sm-12">
            <p class="center">&copy; <?= Yii::$app->name ?>
                <?= date('Y') > 2016 ? "2016-" . date('Y') : date('Y') ?>
            </p>
        </div>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
