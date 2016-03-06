<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;

/**
 * This is the model class for table "breed".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 * @property integer $breed_status_id
 *
 * @property BreedStatus $breedStatus
 * @property Pet[] $pets
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
            [['name', 'date_create', 'date_update', 'breed_status_id'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['breed_status_id'], 'integer'],
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
            'breed_status_id' => Yii::t('app', 'Breed Status ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreedStatus()
    {
        return $this->hasOne(BreedStatus::className(), ['id' => 'breed_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPets()
    {
        return $this->hasMany(Pet::className(), ['breed_id' => 'id']);
    }
}
