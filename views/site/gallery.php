<?php
use app\models\Slide;
/**
 * @var $this yii\web\View
 * @var Slide[] $models
 */

$this->title = Yii::t('app', 'Gallery') . ' | ' . Yii::$app->name;
?>
<div class="profile-page">
    <?php foreach ($models as $key => $model) { ?>
        <!-- Modal Core -->
        <div class="modal fade" id="myModal<?= $key?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img class="img-rounded img-responsive img-raised"  src="/<?= $model->source_url ?>" alt="<?= $model->alt ?>">
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="wrapper">
        <div class="header header-filter">
            <img src="/images/homepage-background.jpg" alt="">
        </div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container gallery-container">
                    <h1 class="text-center"><?= Yii::t('app', 'Gallery')?></h1>
                    <div class="row">
                        <?php foreach ($models as $key => $model) { ?>
                        <div class="col-md-3">
                            <div class="pet" data-toggle="modal" data-target="#myModal<?= $key ?>">
                                <img class="img-rounded img-responsive img-raised"  src="/<?= $model->source_url ?>" alt="<?= $model->alt ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
