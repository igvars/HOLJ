<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('img/examples/city.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?= Yii::t('app', 'Official sites canine federations and clubs')?></h2>
                            <a href="http://www.fci.be/" target="_blank"><img src="images/fci_logo1.png" alt="fci"></a>
                            <a href="http://www.uku.com.ua/" target="_blank"><img src="images/uku.png" alt="uku"></a>
                            <a href="http://vinksu.ho.ua/" target="_blank"><img src="images/vinksu1.jpg" alt="vinksu1"></a>
                            <h2><?= Yii::t('app', 'Our friends')?></h2>
                            <ul class="our-friends-list">
                                <li>
                                    <a href="http://www.fci.be/" target="_blank">Питомник 1</a>
                                </li>
                                <li>
                                    <a href="http://www.fci.be/" target="_blank">Питомник 2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
