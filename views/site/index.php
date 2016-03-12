<?php
use app\models\Pet;

/**
 * @var $this yii\web\View
 * @var Pet[] $pets
 */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-xs-12">
                <h2><?= Yii::t('app','Dear friends, we are pleased to welcome you to the nursery, "Home of little joys"!')?></h2>

                <p><?= Yii::t('app', 'We are happy that we are the owners of the magnificent breed Chihuahua - appreciate them for their devotion, love and trust in us. We hope that you share our love for this sweet baby! And let each day spent with the smallest dog in the world fills your life enthusiasm, happiness and positive!') ?></p>

            </div>
        </div>
        <div class="row">
            <?php foreach($pets as $pet) { ?>
                <?php if(!empty($pet->petImages)) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="image-wrap">
                            <img src="/<?= $pet->petImages[0]->source_url ?>" alt="">
                        </div>

                        <div><?= $pet->name ?></div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
</div>
