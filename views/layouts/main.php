<?php

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
use app\components\BaseView;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" href="<?= Yii::$app->getHomeUrl() ?>images/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?php //echo WLang::widget();?>
    <header>

        <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->name ?></a>
                </div>

                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?= Yii::t('app', 'Our dogs') ?><b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="our-dogs.html">Порода 1</a></li>
                                <li><a href="our-dogs.html">Порода 2</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= Url::to(['/site/puppies'])?>"><?= Yii::t('app', 'Puppies') ?></a></li>
                        <li><a href="<?= Url::to(['/site/gallery'])?>"><?= Yii::t('app', 'Gallery') ?></a></li>
                        <li><a href="<?= Url::to(['/site/our-friends'])?>"><?= Yii::t('app', 'Our friends') ?></a></li>
                        <li><a href="<?= Url::to(['/site/contacts'])?>"><?= Yii::t('app', 'Contacts') ?></a></li>
                        <li>
                            <a href="https://vk.com/id363164189" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/home_sweet_pleasures/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <main>
            <div class="content">
                <?= $content ?>

                        <footer class="footer">
                            <div class="container">
                                <nav class="pull-left">
                                    <ul>
                                        <li>
                                            <a href="<?= Yii::$app->homeUrl ?>">
                                                <?= Yii::$app->name ?>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="copyright pull-right">
                                    &copy; <?= date('Y') > 2016 ? "2016-" . date('Y') : date('Y') ?><!--, made with <i class="fa fa-heart heart"></i> by Creative Tim-->
                                </div>

                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </main>
    </section>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
