<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Error') . ' | ' . Yii::$app->name;
?>
<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter">
            <img src="/images/homepage-background.jpg" alt="">
        </div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container main-padding-top">

                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>

                    <p>
                        <?= Yii::t('app', 'The above error occurred while the Web server was processing your request.')?>
                    </p>
                    <p>
                        <?= Yii::t('app', 'Please contact us if you think this is a server error. Thank you.')?>
                    </p>
                </div>
            </div>
        </div>
