<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CommonStatus;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SlideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Slides');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Slide'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'source_url',
                'value' => function($data) {
                    return "<img src='/" . $data->source_url . "' />";
                },
                'format' => 'raw',
                'contentOptions' => [
                    'class' => 'grid-image'
                ],
                'filter' => false
            ],
            'alt',
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
    ]); ?>

</div>
