<?php
namespace app\components;

use app\models\Breed;
use yii\web\View;

/**
 * Class BaseView
 * @package app\components
 *
 */
class BaseView extends View {
    public static function getBreedItems() {
        $breedItems = [];
        /**
         * @var Breed $breed
         */
        foreach(Breed::find()->pets()->all() as $breed) {
            $breedItems[] = [
                'label' => $breed->name,
                'url' => \Yii::$app->urlManager->createUrl(['/site/breed','id'=>$breed->id])
            ];
        }
        return $breedItems;
    }
}