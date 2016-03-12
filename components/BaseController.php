<?php
namespace app\components;

use app\models\Breed;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\Controller;

/**
 * Class BaseController
 * @package app\components
 *
 * @method Breed[] breeds()
 */
class BaseController extends Controller {
    public $layout = "main";

    public function getBreeds() {
        return ArrayHelper::map(Breed::find()->active()->all(),'id','name');
    }
}