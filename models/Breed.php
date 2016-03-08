<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "breed".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $date_create
 * @property string $date_update
 * @property integer $common_status_id
 *
 * @property CommonStatus $commonStatus
 * @property Brood[] $broods
 */
class Breed extends ActiveRecordBehaviors
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'breed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'common_status_id'], 'required'],
            [['description'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['common_status_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
            'common_status_id' => Yii::t('app', 'Common Status ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommonStatus()
    {
        return $this->hasOne(CommonStatus::className(), ['id' => 'common_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBroods()
    {
        return $this->hasMany(Brood::className(), ['breed_id' => 'id']);
    }

    public static function find()
    {
        return new BreedQuery(get_called_class());
    }

    public static function getAll() {
        return ArrayHelper::map(self::find()->all(),'id','name');
    }
}

class BreedQuery extends ActiveQuery
{
    public function active()
    {
        return $this->andWhere(['common_status_id' => CommonStatus::ACTIVE]);
    }
}
