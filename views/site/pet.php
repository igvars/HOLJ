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
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d2f/GjnTUzB20pk.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d26/xZVnswIzYZI.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d1d/iLSHuQgfR90.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d14/f8IGXDj2LRY.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-nav">
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d2f/GjnTUzB20pk.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d26/xZVnswIzYZI.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d1d/iLSHuQgfR90.jpg" alt="">
                                        </div>
                                        <div class="pet-slide">
                                            <img src="https://pp.vk.me/c637918/v637918904/5d14/f8IGXDj2LRY.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="title"><?= $model->name ?></h1>
                            <p>
                                Дата рождения: <br>
                                Пол: <br>
                                Размер: <br>
                                Окрас:<br>
                                Титулы:<br>
                                Мать:<br>
                                Отец:
                            </p>

                            <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModal1">Родословная</button>

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
