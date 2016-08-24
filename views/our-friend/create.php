<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OurFriend */

$this->title = Yii::t('app', 'Create Our Friend');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Friends'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-friend-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
