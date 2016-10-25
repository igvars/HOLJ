<?php
use app\models\Breed;

/**
 * @var $this yii\web\View
 * @var Breed $model
 */

$this->title = $model->name . ' | ' . Yii::$app->name;
?>

<div class="profile-page">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('/images/bg.jpg');"></div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <h1 class="text-center"><?= $model->name ?></h1>
                    <div class="description text-center">
                        <p><?= $model->description ?></p>
                    </div>
                    <div class="row">
                        <?php foreach ($model->broods as $brood) { ?>
                            <?php foreach ($brood->puppies as $pet) { ?>
                                <?php echo $this->render('/layouts/pet', ['pet' => $pet]); ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
