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
        <div class="header header-filter" style="background-image: url('/images/bg.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container main-padding-top">

                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>

                    <p>
                        The above error occurred while the Web server was processing your request.
                    </p>
                    <p>
                        Please contact us if you think this is a server error. Thank you.
                    </p>
                </div>
            </div>
        </div>
