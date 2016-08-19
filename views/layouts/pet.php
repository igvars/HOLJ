<?php
use app\models\Pet;

/**
 * @var Pet $pet
 */
?>
<div class="col-md-3">
    <a class="pet" href="<?= Yii::$app->urlManager->createUrl(['site/pet', 'id'=>$pet->id])?>">
        <img class="img-rounded img-responsive img-raised"  src="/<?= $pet->petImages[0]->source_url ?>" alt="<?= $pet->name ?>">
    </a>
</div>