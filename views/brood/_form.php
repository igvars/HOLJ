<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Brood */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brood-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => Yii::t('app', 'Enter birth date ...')],
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
        ],
        'removeButton' => false,
        'language' => \app\models\Lang::getCurrent()['local'],
    ]); ?>

    <?= $form->field($model, 'breed_id')->dropDownList(\app\models\Breed::getAll()) ?>

    <?= $form->field($model, 'common_status_id')->dropDownList(\app\models\CommonStatus::getAll()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>