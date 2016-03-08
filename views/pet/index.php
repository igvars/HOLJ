<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pet'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'date_create',
            'date_update',
            [
                'attribute' => 'brood_id',
                'filter' => \app\models\Brood::getAll()
            ],
            [
                'attribute' => 'pet_status_id',
                'filter' => \app\models\PetStatus::getAll()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
