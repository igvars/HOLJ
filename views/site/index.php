<?php
use app\models\Pet;
use app\models\Breed;

/**
 * @var $this yii\web\View
 * @var Pet[] $pets
 * @var Breed[] $breeds
 */

$this->title = Yii::$app->name;
?>
<div class="landing-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/images/homepage-background.jpg');">
        </div>

        <div class="main main-raised">
            <div class="container main-padding-top">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="text-center">
                            <p><?= Yii::t('app', 'We are happy that the owners are great dogs. We value them for their devotion, love and trust in us. We hope that you share our love for these cute babies! And let each day spent with the smallest dog in the world fills your life enthusiasm, happiness and positive!') ?></p>
                        </div>
                    </div>
                </div>
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
                                <?php
                                } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($breeds as $key => $breed) : ?>
                                <div role="tabpanel" class="tab-pane fade <?= $key==0?'active in':''?>" id="pill<?= $key ?>">
                                    <div class="col-md-12">
                                        <h3><?= $breed->brood->name ?></h3>
                                    </div>
                                    <?php foreach ($breed->brood->puppies as $pet ) {
                                        echo $this->render('/layouts/pet', ['pet' => $pet]);
                                    } ?>
                                    <div class="col-md-12">
                                        <a  class="btn btn-primary btn-round btn-group-raised" href="<?= Yii::$app->urlManager->createUrl(['site/puppies-breed', 'id'=>$breed->id])?>"><?= Yii::t('app', 'view all')?></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="gallery-image img-rounded" src="https://pp.vk.me/c631929/v631929189/37535/amwTJrM-KMk.jpg" alt="">
                                <img class="gallery-image img-rounded" src="https://pp.vk.me/c633619/v633619189/2d1bb/-VyCwY4_r_g.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="gallery-image img-rounded" src="https://pp.vk.me/c631929/v631929189/37520/YY824WhA4rM.jpg" alt="">
                                <img class="gallery-image img-rounded" src="https://pp.vk.me/c633619/v633619189/2d1bb/-VyCwY4_r_g.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="contact-container">
                    <div class="row">
                        <div class="text-center">
                            <div class="name">
                                <h3 class="title main-padding-top"><?= Yii::t('app', 'Lesya Usatyuk')?></h3>
                                <h6><?= Yii::t('app', 'Owner & Breeder')?></h6>
                                <h6><?= Yii::t('app', "Nursery «Home of little joys»")?></h6>
                            </div>
                        </div>
                        <div class="col-md-6 nav-align-center">
                            <h3 class="text-primary"><i class="fa fa-map-marker"></i> <?= Yii::t('app', 'Our location')?></h3>
                            <p>
                                <?= Yii::t('app', 'Vinnytsia')?>,<br>
                                <?= Yii::t('app', 'Ukraine')?>
                            </p>
                        </div>
                        <div class="col-md-6 nav-align-center">
                            <h3 class="text-primary"><i class="fa fa-phone"></i> <?= Yii::t('app', 'How to contact') ?></h3>
                            <p>
                                <?= Yii::t('app', 'Lesya Usatyuk')?><br>
                                <a href="tel:+380636659660">+380 63 665 96 60</a><br>
                                <a href="tel:+380677005275">+380 67 700 52 75</a><br>
                                <?= Yii::t('app', 'Mon - Fri')?>, 10:00-20:00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>