<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Brood */

$this->title = Yii::t('app', 'Create Brood');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Broods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brood-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
