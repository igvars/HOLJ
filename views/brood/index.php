<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CommonStatus;
use app\models\Breed;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BroodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Broods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brood-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Brood'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'breed_id',
                'filter' => Breed::getAll()
            ],
            [
                'attribute' => 'common_status_id',
                'value' => function($data) {
                    return $data->common_status_id == CommonStatus::ACTIVE ?
                        '<span class="status-button status-active glyphicon glyphicon-refresh"></span>'
                        : '<span class="status-button status-inactive glyphicon glyphicon-refresh"></span>';
                },
                'format' => 'raw',
                'filter' => CommonStatus::getAll()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'options' => [
            'data-url' => Yii::$app->urlManager->createUrl(['brood/change-status']),
            'class' => 'grid'
        ]
    ]); ?>

</div>
