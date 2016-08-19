<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Gallery') . ' | ' . Yii::$app->name;
?>
<div class="profile-page">

    <!-- Modal Core -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Core -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/images/bg.jpg');"></div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container gallery-container">
                    <h1 class="text-center"><?= Yii::t('app', 'Gallery')?></h1>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal1">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal2">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal1">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal2">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal1">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal2">
                                <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
