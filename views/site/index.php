<?php
use app\models\Pet;

/**
 * @var $this yii\web\View
 * @var Pet[] $pets
 */

$this->title = Yii::$app->name;
?>
<div class="landing-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Home of little joys</h1>
                        <h4>Мы счастливы, что являемся владельцами великолепных собак. Мы ценим их за преданность, любовь и доверие к нам. Надеемся, что Вы разделите с нами любовь к этим милым малышам! И пусть каждый день, проведённый с самой маленькой собакой в мире наполняет Вашу жизнь задором, счастьем и позитивом!</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container main-padding-top">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>Дополнительное описание</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-12 nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="active">
                                    <a href="#pill1" role="tab" data-toggle="tab">
                                        Порода 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#pill2" role="tab" data-toggle="tab">
                                        Порода 2
                                    </a>
                                </li>
                                <li>
                                    <a href="#pill3" role="tab" data-toggle="tab">
                                        Порода 3
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="pill1">
                                    <div class="col-md-12">
                                        <h3>Помет А</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c631527/v631527904/4432e/Z-s4fogTsFY.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16cc1/7kB71YGjE1Q.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16ca3/6GU1l0hhi_Q.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c637918/v637918904/5d26/xZVnswIzYZI.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <a  class="btn btn-primary btn-round btn-group-raised" href="breed.html">Смотреть еще...</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="pill2">
                                    <div class="col-md-12">
                                        <h3>Помет B</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c615817/v615817189/16ca3/6GU1l0hhi_Q.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c637918/v637918904/5d26/xZVnswIzYZI.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <a  class="btn btn-primary btn-round btn-group-raised" href="breed.html">Смотреть еще...</a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="pill3">
                                    <div class="col-md-12">
                                        <h3>Помет C</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c636117/v636117904/23baf/xbmDuqI8GB0.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="pet" href="pet.html">
                                            <img class="img-rounded img-responsive img-raised"  src="https://pp.vk.me/c636117/v636117904/23bdc/4ST0AvBW3wo.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <a  class="btn btn-primary btn-round btn-group-raised" href="breed.html">Смотреть еще...</a>
                                    </div>
                                </div>
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
                                <h3 class="title main-padding-top">Леся Усатюк</h3>
                                <h6>Владелец & Заводчик</h6>
                                <h6>Питомник «Home of little joys»</h6>
                            </div>
                        </div>
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