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
                            'label' => 'Breed',
                            'url' => Yii::$app->urlManager->createUrl(['breed/index']),
                        ],
                        [
                            'label' => 'Pet',
                            'url' => Yii::$app->urlManager->createUrl(['pet/index']),
                        ],
                        [
                            'label' => 'Pet Status',
                            'url' => Yii::$app->urlManager->createUrl(['pet-status/index']),
                        ],
                        [
                            'label' => 'Content',
                            'url' => Yii::$app->urlManager->createUrl(['message/index']),
                        ],
                        [
                            'label' => 'Languages',
                            'url' => Yii::$app->urlManager->createUrl(['lang/index']),
                        ],
                        [
                            'label' => 'Main Slider',
                            'url' => Yii::$app->urlManager->createUrl(['slide/index']),
                        ],
                    ],
                    'options' => ['class' =>'nav-stacked'], // set this to nav-tab to get tab-styled navigation
]);
                ?>
            </div>
        </div>

    </div>
</div>
