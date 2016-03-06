<?php
namespace app\components;

use Yii;
use yii\base\Model;
use yii\helpers\Html;

class ActiveForm extends \yii\widgets\ActiveForm {

//    public $fieldClass = 'app\components\ActiveField';

    /**
     * Generates a form field.
     * A form field is associated with a model and an attribute. It contains a label, an input and an error message
     * and use them to interact with end users to collect their inputs for the attribute.
     * @param Model $model the data model
     * @param string $attribute the attribute name or expression. See [[Html::getAttributeName()]] for the format
     * about attribute expression.
     * @param array $options the additional configurations for the field object. These are properties of [[ActiveField]]
     * or a subclass, depending on the value of [[fieldClass]].
     * @return string the created ActiveField object
     * @see fieldConfig
     */
    public function imageField($model, $attribute, $options = []){

        if ($model->$attribute) {
            $src = '@web/'.$model->$attribute;
        } else {
            $src = '@web/images/no_image.jpg';
        }

        $imageField =  '';
        $imageField .= Html::activeLabel($model, $attribute,['class'=>'col-sm-12 control-label']);
        $imageField .= Html::beginTag('label',['for'=>Html::getInputId($model, $attribute), ['class'=>'col-sm-8']]) ;
        $imageField .= Html::img($src,$options);
        $imageField .= Html::endTag('label');
        $imageField .= Html::beginTag('span', [ 'class'=>'image-trash glyphicon glyphicon-remove-circle'] );
        $imageField .= Html::endTag('span');
        $imageField .= Html::activeFileInput($model, $attribute,['style'=>'display:none']);
        $imageField .= Html::activeHiddenInput($model, 'removeImage', ['value'=>'0'] );
        return $imageField;
    }

    /**
     * Generates a form field.
     * A form field is associated with a model and an attribute. It contains a label, an input and an error message
     * and use them to interact with end users to collect their inputs for the attribute.
     * @param Model $model the data model
     * @param string $attribute the attribute name or expression. See [[Html::getAttributeName()]] for the format
     * about attribute expression.
     * @param array $options the additional configurations for the field object. These are properties of [[ActiveField]]
     * or a subclass, depending on the value of [[fieldClass]].
     * @return ActiveField the created ActiveField object
     * @see fieldConfig
     */
    public function field($model, $attribute, $options = []) {
        return parent::field($model, $attribute, $options);
    }
}