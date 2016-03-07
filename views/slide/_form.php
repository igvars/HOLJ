<?php

use yii\helpers\Html;
use app\components\ActiveForm;
use app\models\CommonStatus;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Slide */
/* @var $form app\components\ActiveForm */
/* @var $form \yii\widgets\ActiveForm*/
?>

<div class="slide-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->imageField($model, 'source_url', ['class'=>'form-image'])?>

    <?= $form->field($model, 'alt')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'common_status_id')->dropDownList(CommonStatus::getAll()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
