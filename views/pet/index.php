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
            [
                'attribute' => 'petImages',
                'value' => function($data) {
                    if($data->petImages) {
                        return "<img src='/" . $data->petImages[0]->source_url . "' />";
                    }
                    return "<img src='/' />";
                },
                'format' => 'raw',
                'contentOptions' => [
                    'class' => 'grid-image'
                ],
                'filter' => false
            ],
            'name',
            'date_create',
            'date_update',
            [
                'attribute' => 'breed_id',
                'filter' => \app\models\Breed::getAll(),
//                'value' => function($data) {
//                    return $data->brood->breed->name;
//                }
                'value' => 'brood.breed.name'
            ],
            [
                'attribute' => 'brood_id',
                'filter' => \app\models\Brood::getAllWithDate(),
                'value' => function($data) {
                    return $data->brood->name . " " . $data->brood->date;
                }
            ],
            [
                'attribute' => 'pet_status_id',
                'filter' => \app\models\PetStatus::getAll(),
                "value" => "petStatus.name"
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
