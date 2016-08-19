<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('img/examples/city.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="https://pp.vk.me/c633619/v633619189/2d1bb/-VyCwY4_r_g.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title main-padding-top">Леся Усатюк</h3>
                                <h6>Владелец & Заводчик</h6>
                                <h6>Питомник «Home of little joys»</h6>
                            </div>
                        </div>
                    </div>
                    <div class="contact-container">
                        <div class="row">
                            <div class="col-md-6 nav-align-center">
                                <h3 class="text-primary"><i class="fa fa-map-marker"></i> Мы находимся</h3>
                                <p>
                                    Винница,<br>
                                    Украина
                                </p>
                            </div>
                            <div class="col-md-6 nav-align-center">
                                <h3 class="text-primary"><i class="fa fa-phone"></i> Как связаться</h3>
                                <p>
                                    Леся Усатюк<br>
                                    <a href="tel:+380636659660">+380 63 665 96 60</a><br>
                                    <a href="tel:+380677005275">+380 67 700 52 75</a><br>
                                    Пн - Пт, 10:00-20:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
