<?php
use app\models\Pet;
use app\models\Breed;

/**
 * @var $this yii\web\View
 * @var Breed[] $breeds
 */

$this->title = Yii::t('app', 'Puppies') . ' | ' . Yii::$app->name;
?>

<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter">
            <img src="/images/homepage-background.jpg" alt="">
        </div>

        <div class="main main-raised">
            <div class="profile-content">

                <div class="text-center main-padding-top">
                    <h1><?= Yii::t('app', 'Puppies')?></h1>
                </div>
                <div class="container">
                    <div class="section text-center section-landing">
                        <div class="row">
                            <div class="col-md-12 nav-align-center">
                                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                    <?php foreach ($breeds as $key => $breed) { ?>
                                        <li <?= $key==0?'class="active"':''?>>
                                            <a href="#pill<?= $key?>" role="tab" data-toggle="tab">
                                                <?= $breed->name ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <div class="tab-content">
                                    <?php foreach ($breeds as $key => $breed) { ?>
                                        <div role="tabpanel" class="tab-pane fade <?= $key==0?'active in':''?>" id="pill<?= $key ?>">
                                            <?php foreach ($breed->broods as $brood) { ?>
                                                <div class="col-md-12">
                                                    <h3><?= $brood->name ?></h3>
                                                </div>
                                                <?php foreach ($brood->puppies as $pet ) {
                                                    echo $this->render('/layouts/pet', ['pet' => $pet]);
                                                }
                                            } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
