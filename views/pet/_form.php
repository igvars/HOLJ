<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Pet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pet-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="image-container">
            <?php foreach($model->imageFiles as $file) {
                echo $this->render('/layouts/template-image.php',['image'=>$file]);
            } ?>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="add-image-block">
                <span data-url="/pet/add" data-id="<?= $model->id ?>" class="image-add glyphicon glyphicon-plus"></span>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea() ?>
    <?= $form->field($model, 'titles')->textarea() ?>
    <?= $form->field($model, 'gender')->dropDownList([
        '1' => Yii::t('app', 'Male'),
        '2' => Yii::t('app', 'Female'),
    ]) ?>
    <?= $form->field($model, 'size')->textInput() ?>
    <?php //$form->field($model, 'mother_id')->textInput() ?>
    <?= $form->field($model, 'is_our_pet')->checkbox() ?>
    <?= $form->field($model, 'color')->textInput() ?>
    <?= $form->field($model, 'father_name')->textInput() ?>
    <?= $form->field($model, 'father_link')->textInput() ?>
    
    <?= $form->field($model, 'breed_id')->dropDownList(\app\models\Breed::getAll(),['prompt'=>Yii::t('app','-- select breed --'),'data-url'=>'/pet/subcategory']) ?>

    <?= $form->field($model, 'brood_id')->dropDownList(\app\models\Brood::getAll($model->breed_id),['prompt'=>Yii::t('app','-- select brood --')]) ?>

    <?= $form->field($model, 'pet_status_id')->dropDownList(\app\models\PetStatus::getAll()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
