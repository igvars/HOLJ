<?php
use yii\bootstrap\Nav;
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
                            'label' => 'Content',
                            'url' => ['message/index'],
                        ],
                        [
                            'label' => 'Languages',
                            'url' => ['lang/index'],
                        ],
                        [
                            'label' => 'Main Slider',
                            'url' => ['site/index'],
                        ],
                    ],
                    'options' => ['class' =>'nav-stacked'], // set this to nav-tab to get tab-styled navigation
]);
                ?>
            </div>
        </div>

    </div>
</div>
