<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Contacts') . ' | ' . Yii::$app->name;
?>
<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/images/bg.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="https://pp.vk.me/c633619/v633619189/2d1bb/-VyCwY4_r_g.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title main-padding-top"><?= Yii::t('app', 'Lesya Usatyuk')?></h3>
                                <h6><?= Yii::t('app', 'Owner & Breeder')?></h6>
                                <h6><?= Yii::t('app', "Nursery «Home of little joys»")?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="contact-container">
                        <div class="row">
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
        </div>
