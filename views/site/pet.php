<?php
use app\models\Pet;

/**
 * @var $this yii\web\View
 * @var Pet $model
 */

$this->title = $model->name . ' | ' . Yii::$app->name;
?>

<!-- Modal Core -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <img class="img-rounded img-responsive img-raised"  src="" alt="<?= Yii::t('app', 'Bloodline')?>">
            </div>
        </div>
    </div>
</div>

<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/images/bg.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-for">
                                        <?php foreach ($model->petImages as $petImage) { ?>
                                            <div class="pet-slide">
                                                <div class="image-wrapper">
                                                    <img src="/<?= $petImage->source_url?>" alt="<?= $model->name ?>">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-nav">
                                        <?php foreach ($model->petImages as $petImage) { ?>
                                            <div class="pet-slide">
                                                <div class="image-wrapper">
                                                    <img src="/<?= $petImage->source_url?>" alt="<?= $model->name ?>">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="title"><?= $model->name ?></h1>
                            <p>
                                <?= Yii::t('app', 'Date of birth: ')?><?= date('Y-m-d', strtotime($model->brood->date)) ?><br>
                                <?= Yii::t('app', 'Gender: ')?><?= $model->gender == Pet::MALE ? Yii::t('app', 'Male') : Yii::t('app', 'Female') ?><br>
                                <?= Yii::t('app', 'Size: ')?><?= $model->size ?><br>
                                <?= Yii::t('app', 'Color: ')?><?= $model->color ?><br>
                                <?= Yii::t('app', 'Titles: ')?><?= $model->titles ?><br>
                                <?php if($model->mother_id) { ?>
                                    <?= Yii::t('app', 'Mother: ')?><?= $model->getMother()->name ?><br>
                                <?php } ?>
                                <?= Yii::t('app', 'Father: ')?><a href="<?= $model->father_link ?>"><?= $model->father_name ?></a>
                            </p>

                            <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal1"><?= Yii::t('app', 'Bloodline')?></button>

                        </div>
                    </div>
                </div>
<!--                <div class="container related-container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h2 class="text-center">Братики и Сестрички</h2>-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-3">-->
<!--                                    <a class="pet" href="pet.html">-->
<!--                                        <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <a class="pet" href="pet.html">-->
<!--                                        <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <a class="pet" href="pet.html">-->
<!--                                        <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16ca3/6GU1l0hhi_Q.jpg" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <a class="pet" href="pet.html">-->
<!--                                        <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c637918/v637918904/5d26/xZVnswIzYZI.jpg" alt="">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
