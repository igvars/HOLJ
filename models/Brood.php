<?php

namespace app\models;

use Yii;
use app\components\ActiveRecordBehaviors;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brood".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 * @property integer $breed_id
 * @property integer $common_status_id
 *
 * @property Breed $breed
 * @property CommonStatus $commonStatus
 * @property Pet[] $pets
 */
class Brood extends ActiveRecordBehaviors
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brood';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'breed_id', 'common_status_id'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['breed_id', 'common_status_id'], 'integer'],
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
            'date_create' => Yii::t('app', 'Date Create'),
            'date_update' => Yii::t('app', 'Date Update'),
            'breed_id' => Yii::t('app', 'Breed ID'),
            'common_status_id' => Yii::t('app', 'Common Status ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreed()
    {
        return $this->hasOne(Breed::className(), ['id' => 'breed_id']);
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
    public function getPets()
    {
        return $this->hasMany(Pet::className(), ['brood_id' => 'id']);
    }

    public static function getAll() {
        return ArrayHelper::map(Brood::find()->all(),'id','name');
    }
}
