<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-xs-12">
                <?php
                echo Nav::widget([
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Breeds'),
                            'url' => Yii::$app->urlManager->createUrl(['breed/index']),
                        ],
                        [
                            'label' => Yii::t('app', 'Broods'),
                            'url' => Yii::$app->urlManager->createUrl(['brood/index']),
                        ],
                        [
                            'label' => Yii::t('app', 'Pets'),
                            'url' => Yii::$app->urlManager->createUrl(['pet/index']),
                        ],
                        [
                            'label' => Yii::t('app', 'Messages'),
                            'url' => Yii::$app->urlManager->createUrl(['message/index']),
                        ],
                        [
                            'label' => Yii::t('app', 'Gallery'),
                            'url' => Yii::$app->urlManager->createUrl(['slide/index']),
                        ],
                        [
                            'label' => Yii::t('app', 'Our friends'),
                            'url' => Yii::$app->urlManager->createUrl(['our-friend/index']),
                        ],
                    ],
                    'options' => ['class' =>'nav-stacked'], // set this to nav-tab to get tab-styled navigation
]);
                ?>
            </div>
        </div>

    </div>
</div>
