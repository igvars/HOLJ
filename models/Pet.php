<?php

namespace app\models;

use app\components\ActiveRecordBehaviors;
use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 * @property integer $breed_id
 * @property integer $pet_status_id
 *
 * @property Breed $breed
 * @property PetStatus $petStatus
 * @property PetImage[] $petImages
 */
class Pet extends ActiveRecordBehaviors
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date_create', 'date_update', 'breed_id', 'pet_status_id'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['breed_id', 'pet_status_id'], 'integer'],
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
            'pet_status_id' => Yii::t('app', 'Pet Status ID'),
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
    public function getPetStatus()
    {
        return $this->hasOne(PetStatus::className(), ['id' => 'pet_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetImages()
    {
        return $this->hasMany(PetImage::className(), ['pet_id' => 'id']);
    }
}
