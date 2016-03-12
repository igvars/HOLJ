<?php

/* @var $this yii\web\View */
/**
 * @var \app\models\Breed $model
 */
$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-xs-12">
                <h1><?= Yii::t('app','Puppies')?></h1>
            </div>
        </div>
        <?php foreach($model->broods as $brood) {
            if($brood->pets) {
            ?>
            <div class="row">
                <div class="col-sx-12">
                    <h2><?= $brood->name?></h2>
                </div>
                <?php foreach($brood->pets as $pet) {
                    if($pet->petImages) { ?>
                    <div class="col-md-4 col-sm-6 com-xs-12">
                        <div class="image-wrap">
                            <img src="/<?= $pet->petImages[0]->source_url ?>" alt="">
                        </div>
                        <div><?= $pet->name ?></div>
                    </div>
                <?php }
                } ?>
            </div>
        <?php } else {
                echo Yii::t('app','We haven\'t some pets of this breed');
            }
        } ?>
    </div>
</div>
